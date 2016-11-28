<?php

class PacientesController extends ControladorBase{

	public function __construct() {
		parent::__construct();
	}



	public function index(){
	
		session_start();
	
	
		if (isset(  $_SESSION['usuario_usuarios']) )
		{
			
			$paises=new PaisesModel();
			$resultPais = $paises->getAll("nombre_paises");
			
			$provincias=new ProvinciasModel();
			$resultProv = $provincias->getAll("nombre_provincias");
			 
			$cantones = new CantonesModel();
			$resultCan= $cantones->getAll("nombre_cantones");
			
			$ocupaciones = new OcupacionesModel();
			$resultOcu= $ocupaciones->getAll("nombre_ocupaciones");
			
			$sexo = new SexoModel();
			$resultSexo= $sexo->getAll("nombre_sexo");
			
			$estado_civil = new EstadoCivilModel();
			$resultEstadoCivil= $estado_civil->getAll("nombre_estado_civil");
			
			$tipo_sangre = new TipoSangreModel();
			$resultTipoSangre= $tipo_sangre->getAll("nombre_tipo_sangre");
				
			
			
			$pacientes = new PacientesModel();
			
			$permisos_rol=new PermisosRolesModel();
		  	$nombre_controladores = "Pacientes";
			$id_rol= $_SESSION['id_rol'];
			$resultPer = $pacientes->getPermisosVer("   controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
				
			if (!empty($resultPer))
			{
		
				$_id_usuarios = $_SESSION['id_usuarios'];
				$columnas="entidades.nombre_entidades, 
						  pacientes.id_pacientes, 
						  pacientes.cedula_pacientes, 
						  pacientes.nombre_pacientes, 
						  pacientes.apellido_pacientes, 
						  pacientes.fecha_nacimiento_pacientes, 
						  pacientes.edad_pacientes, 
						  sexo.nombre_sexo, 
						  estado_civil.nombre_estado_civil, 
						  pacientes.telefono_pacientes, 
						  pacientes.celular_pacientes, 
						  paises.nombre_paises, 
						  provincias.nombre_provincias, 
						  cantones.nombre_cantones, 
						  pacientes.direccion_pacientes, 
						  ocupaciones.nombre_ocupaciones, 
						  tipo_sangre.nombre_tipo_sangre, 
						  pacientes.fotografia_pacientes, 
						  pacientes.numero_historia_pacientes";
				
				$tablas=" public.pacientes, 
						  public.usuarios, 
						  public.entidades, 
						  public.paises, 
						  public.provincias, 
						  public.cantones, 
						  public.sexo, 
						  public.estado_civil, 
						  public.tipo_sangre, 
						  public.ocupaciones";
				$where=" pacientes.id_tipo_sangre = tipo_sangre.id_tipo_sangre AND
						  pacientes.id_ocupaciones = ocupaciones.id_ocupaciones AND
						  entidades.id_entidades = usuarios.id_entidades AND
						  entidades.id_entidades = pacientes.id_entidades AND
						  paises.id_paises = pacientes.id_paises AND
						  provincias.id_provincias = pacientes.id_provincias AND
						  cantones.id_cantones = pacientes.id_cantones AND
						  sexo.id_sexo = pacientes.id_sexo AND
						  estado_civil.id_estado_civil = pacientes.id_estado_civil AND usuarios.id_usuarios='$_id_usuarios'";
				$id="pacientes.id_pacientes";
				
				$resultSet=$pacientes->getCondiciones($columnas ,$tablas ,$where, $id);
				
				
			
				$resultEdit = "";
						
						if (isset ($_GET["id_pacientes"])   )
						{
						
							$_id_pacientes = $_GET["id_pacientes"];
							$resultEdit = $pacientes->getBy("id_pacientes = '$_id_pacientes' ");
							
							$traza=new TrazasModel();
							$_nombre_controlador = "Pacientes";
							$_accion_trazas  = "Editar";
							$_parametros_trazas = $_id_pacientes;
							$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);
						}
						
						
					
					$this->view("Pacientes",array(
							
							  "resultSet"=>$resultSet, "resultEdit"=>$resultEdit, "resultPais"=>$resultPais, "resultProv" =>$resultProv, "resultCan" =>$resultCan,
							 "resultOcu"=>$resultOcu, "resultSexo"=>$resultSexo, "resultEstadoCivil"=>$resultEstadoCivil, "resultTipoSangre"=>$resultTipoSangre 
							
					));
			
			
			}
			else
			{
				$this->view("Error",array(
						"resultado"=>"No tiene Permisos de Acceso a Pacientes"
			
				));
			
			
			}
			
		}
		else
		{
	
			$this->view("ErrorSesion",array(
					"resultSet"=>""
		
						));
		}
	
	}
	
	
	public function InsertaPacientes(){

		session_start();
		$resultado = null;
		$pacientes = new PacientesModel();
		$usuarios = new UsuariosModel();
		$consecutivos = new ConsecutivosModel();
		$sexo = new SexoModel();
		$nombre_controladores = "Pacientes";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $pacientes->getPermisosEditar("   nombre_controladores = '$nombre_controladores' AND id_rol = '$id_rol' " );
		
		if (!empty($resultPer))
		{
			

			$_id_usuarios = $_SESSION['id_usuarios'];
			$resultEnt = $usuarios->getBy("id_usuarios='$_id_usuarios'");
			$_id_entidades=$resultEnt[0]->id_entidades;
			$_cedula_pacientes = $_POST["cedula_pacientes"];
			$_nombre_pacientes = $_POST["nombre_pacientes"];
			$_apellido_pacientes = $_POST["apellido_pacientes"];
			$_fecha_nacimiento_pacientes = $_POST["fecha_nacimiento_pacientes"];
			$_edad_pacientes = $_POST["edad_pacientes"];
			$_id_sexo = $_POST["id_sexo"];
			$_id_estado_civil = $_POST["id_estado_civil"];
			$_telefono_pacientes = $_POST["telefono_pacientes"];
			$_celular_pacientes = $_POST["celular_pacientes"];
			$_id_paises = $_POST["id_paises"];
			$_id_provincias = $_POST["id_provincias"];
			$_id_cantones = $_POST["id_cantones"];
			$_direccion_pacientes= $_POST["direccion_pacientes"];
			$_id_ocupaciones = $_POST["id_ocupaciones"];
			$_id_tipo_sangre = $_POST["id_tipo_sangre"];
				
			$resultConsecutivos = $consecutivos->getBy("id_entidades='$_id_entidades'");
			$_id_consecutivos=$resultConsecutivos[0]->id_consecutivos;
			$_numero_consecutivos=$resultConsecutivos[0]->numero_consecutivos;
			$_update_numero_consecutivo=((int)$_numero_consecutivos)+1;
			
			
			if (isset ($_GET["id_pacientes"])   )
			{
			
				
				$_id_pacientes = $_GET["id_pacientes"];
				
				if ($_FILES['fotografia_pacientes']['tmp_name']!="")
				{
						
				
					$directorio = $_SERVER['DOCUMENT_ROOT'].'/clinica/fotografias_pacientes/';
						
					$nombre = $_FILES['fotografia_pacientes']['name'];
					$tipo = $_FILES['fotografia_pacientes']['type'];
					$tamano = $_FILES['fotografia_pacientes']['size'];
					move_uploaded_file($_FILES['fotografia_pacientes']['tmp_name'],$directorio.$nombre);
					$data = file_get_contents($directorio.$nombre);
					$fotografia_pacientes = pg_escape_bytea($data);
						
						
					$colval = "id_entidades='$_id_entidades' , cedula_pacientes='$_cedula_pacientes' , nombre_pacientes='$_nombre_pacientes', apellido_pacientes='$_apellido_pacientes', fecha_nacimiento_pacientes='$_fecha_nacimiento_pacientes' , edad_pacientes='$_edad_pacientes', id_sexo='$_id_sexo' , id_estado_civil='$_id_estado_civil', telefono_pacientes='$_telefono_pacientes', celular_pacientes='$_celular_pacientes', id_paises='$_id_paises', id_provincias='$_id_provincias', id_cantones='$_id_cantones', direccion_pacientes='$_direccion_pacientes', id_ocupaciones='$_id_ocupaciones', id_tipo_sangre='$_id_tipo_sangre', fotografia_pacientes='$fotografia_pacientes'";
					$tabla = "pacientes";
					$where = "id_pacientes = '$_id_pacientes' AND cedula_pacientes = '$_cedula_pacientes' AND id_entidades = '$_id_entidades'";
					$resultado=$pacientes->UpdateBy($colval, $tabla, $where);
					
				
				}else {
					
					
					
						$colval = "id_entidades='$_id_entidades' , cedula_pacientes='$_cedula_pacientes' , nombre_pacientes='$_nombre_pacientes', apellido_pacientes='$_apellido_pacientes', fecha_nacimiento_pacientes='$_fecha_nacimiento_pacientes' , edad_pacientes='$_edad_pacientes', id_sexo='$_id_sexo' , id_estado_civil='$_id_estado_civil', telefono_pacientes='$_telefono_pacientes', celular_pacientes='$_celular_pacientes', id_paises='$_id_paises', id_provincias='$_id_provincias', id_cantones='$_id_cantones', direccion_pacientes='$_direccion_pacientes', id_ocupaciones='$_id_ocupaciones', id_tipo_sangre='$_id_tipo_sangre'";
						$tabla = "pacientes";
						$where = "id_pacientes = '$_id_pacientes' AND cedula_pacientes = '$_cedula_pacientes' AND id_entidades = '$_id_entidades'";
						$resultado=$pacientes->UpdateBy($colval, $tabla, $where);
					
				}
			}
			else {
		
		    if ($_FILES['fotografia_pacientes']['tmp_name']!="")
			{
			
				
				$directorio = $_SERVER['DOCUMENT_ROOT'].'/clinica/fotografias_pacientes/';
			    $nombre = $_FILES['fotografia_pacientes']['name'];
				$tipo = $_FILES['fotografia_pacientes']['type'];
				$tamano = $_FILES['fotografia_pacientes']['size'];
			    move_uploaded_file($_FILES['fotografia_pacientes']['tmp_name'],$directorio.$nombre);
			    $data = file_get_contents($directorio.$nombre);
			    $fotografia_pacientes = pg_escape_bytea($data);
			
			    $funcion = "ins_pacientes";
				$parametros = " '$_id_entidades' ,'$_cedula_pacientes' , '$_nombre_pacientes', '$_apellido_pacientes', '$_fecha_nacimiento_pacientes' , '$_edad_pacientes', '$_id_sexo' , '$_id_estado_civil', '$_telefono_pacientes', '$_celular_pacientes', '$_id_paises', '$_id_provincias', '$_id_cantones', '$_direccion_pacientes', '$_id_ocupaciones', '$_id_tipo_sangre', '$fotografia_pacientes', '$_numero_consecutivos'";
				$pacientes->setFuncion($funcion);
			    $pacientes->setParametros($parametros);
			    $resultado=$pacientes->Insert();
			
			    $resultConsecutivo=$consecutivos->UpdateBy("numero_consecutivos='$_update_numero_consecutivo'", "consecutivos", "id_consecutivos='$_id_consecutivos'");
			    	
			 
			}
				
			else
			{
			
				$resultSexo = $sexo->getBy("id_sexo='$_id_sexo'");
				$_nombre_sexo=$resultSexo[0]->nombre_sexo;
				
				if($_nombre_sexo=="MASCULINO"){
				
					$fotografia_pacientes= '<img src="view/images/hombre.jpg" class="img-responsive" alt="Responsive image" width="80" height="80">';
					move_uploaded_file($_FILES[$fotografia_pacientes]['tmp_name'],$directorio.$nombre);
					$data = file_get_contents($directorio.$nombre);
					$fotografia_pacientes = pg_escape_bytea($data);
					$funcion = "ins_pacientes";
					$parametros = " '$_id_entidades' ,'$_cedula_pacientes' , '$_nombre_pacientes', '$_apellido_pacientes', '$_fecha_nacimiento_pacientes' , '$_edad_pacientes', '$_id_sexo' , '$_id_estado_civil', '$_telefono_pacientes', '$_celular_pacientes', '$_id_paises', '$_id_provincias', '$_id_cantones', '$_direccion_pacientes', '$_id_ocupaciones', '$_id_tipo_sangre', '$fotografia_pacientes', '$_numero_consecutivos'";
					$pacientes->setFuncion($funcion);
					$pacientes->setParametros($parametros);
					$resultado=$pacientes->Insert();
					
					$resultConsecutivo=$consecutivos->UpdateBy("numero_consecutivos='$_update_numero_consecutivo'", "consecutivos", "id_consecutivos='$_id_consecutivos'");
					 
					
				}else{
					
					$fotografia_pacientes= '<img src="view/images/mujer.jpg" class="img-responsive" alt="Responsive image" width="80" height="80">';
					move_uploaded_file($_FILES[$fotografia_pacientes]['tmp_name'],$directorio.$nombre);
					$data = file_get_contents($directorio.$nombre);
					$fotografia_pacientes = pg_escape_bytea($data);
					$funcion = "ins_pacientes";
					$parametros = " '$_id_entidades' ,'$_cedula_pacientes' , '$_nombre_pacientes', '$_apellido_pacientes', '$_fecha_nacimiento_pacientes' , '$_edad_pacientes', '$_id_sexo' , '$_id_estado_civil', '$_telefono_pacientes', '$_celular_pacientes', '$_id_paises', '$_id_provincias', '$_id_cantones', '$_direccion_pacientes', '$_id_ocupaciones', '$_id_tipo_sangre', '$fotografia_pacientes', '$_numero_consecutivos'";
					$pacientes->setFuncion($funcion);
					$pacientes->setParametros($parametros);
					$resultado=$pacientes->Insert();
					
					$resultConsecutivo=$consecutivos->UpdateBy("numero_consecutivos='$_update_numero_consecutivo'", "consecutivos", "id_consecutivos='$_id_consecutivos'");
					 
				}
				
			
			}
			
			
	
		
		}
		$this->redirect("Pacientes", "index");
		
		}
		else
		{
			$this->view("Error",array(
					"resultado"=>"No tiene Permisos Para Registrar Pacientes"
		
			));
		
		
		}
		
		
		
	}
	
	public function borrarId()
	{
		
		session_start();
		$pacientes = new PacientesModel();
		$nombre_controladores = "Pacientes";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $pacientes->getPermisosBorrar("   nombre_controladores = '$nombre_controladores' AND id_rol = '$id_rol' " );
		
		if (!empty($resultPer))
		{
			if(isset($_GET["id_pacientes"]))
			{
				$id_pacientes=(int)$_GET["id_pacientes"];
		
				$pacientes = new PacientesModel();
				
			$pacientes->deleteBy(" id_pacientes",$id_pacientes);
			
			$traza=new TrazasModel();
			$_nombre_controlador = "Pacientes";
			$_accion_trazas  = "Borrar";
			$_parametros_trazas = $id_pacientes;
			$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);
			}
			
			
			$this->redirect("Pacientes", "index");
			
		}
		else
		{
			$this->view("Error",array(
					"resultado"=>"No tiene Permisos de Borrar Pacientes"
		
			));
		
		
		}
		
	}
	
	
	
}
?>