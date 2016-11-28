  <?php include("view/modulos/head.php"); ?>
  
     

<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Pacientes - Clinica 2016</title>
        
        
          <link rel="stylesheet" href="view/css/bootstrap.css">
          <script src="view/js/jquery.js"></script>
		  <script src="view/js/bootstrapValidator.min.js"></script>
       
		<script>
	$(document).ready(function() {
		//Validacion con BootstrapValidator
		fl = $('#form-pacientes');
	    fl.bootstrapValidator({ 
	        message: 'El valor no es valido.',
	        //fields: name de los inputs del formulario, la regla que debe cumplir y el mensaje que mostrara si no cumple la regla
	        feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
	        fields: {
	        	cedula_usuarios: {
	        		message: 'La cedula no es valida',
	                        validators: {
	                                notEmpty: {
	                                        message: 'La cedula es requerida.'
	                                },
	                                regexp: {
	                                	 
	               					 regexp: /^[0-9]+$/,
	                
	               					 message: 'Ingrese números'
	                
	               				 }
	            				 
	                        }
	                },
	                nombre_usuarios: {
	                        validators: {
	                                notEmpty: {
	                                        message: 'Este campo es requerido.'
	                                },
	                                regexp: {
	                                	 
		               					 regexp: /^[a-zA-Z_áéíóúñ\s]*$/,
		                
		               					 message: 'Ingrese Letras'
		                
		               				 }
	                        }
	                },
	                usuario_usuarios: {
                        validators: {
                                notEmpty: {
                                        message: 'Este campo es requerido.'
                                }
                        }
                },
                clave_usuarios: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    }
                        
                    }
                },
                cclave_usuarios: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    },
                        identical: {
                            field: 'clave_usuarios',
                            message: 'No coinciden'
                        }
                    }
                },
                telefono_usuarios: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    }
                        
                    }
                },
                celular_usuarios: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    }
                        
                    }
                },
                correo_usuarios: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    },
                    emailAddress:{
                        message: 'El correo no es valido.'
                      }
                        
                    }
                },

                id_rol: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    }
                        
                    }
                },
                estados: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    }
                        
                    }
                },
                id_entidad: {
                    validators: {
                    	notEmpty: {
                            message: 'Este campo es requerido.'
                    }
                        
                    }
                }
	                
	        }
	    
	    });
	});
	</script>
		
		
		
    </head>
    <body>
    
       
     <?php include("view/modulos/menu.php"); ?>
 
  
  <div class="container">
  <div class="row" style="background-color: #FAFAFA;">
     
      <form id="form-pacientes" action="<?php echo $helper->url("Pacientes","InsertaPacientes"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
             <br>
         
        	 
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
            
            <div class="col-lg-12">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
            <h4 style="color:#ec971f;">Datos del Paciente</h4>
            <hr/>
            <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="cedula_pacientes" class="control-label">Cedula:</label>
                                  <input type="text" class="form-control" id="cedula_pacientes" name="cedula_pacientes" value="<?php echo $resEdit->cedula_pacientes; ?>"  placeholder="Cedula">
                                  <span class="help-block"></span>
            </div>
		    </div>
			<div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="nombre_pacientes" class="control-label">Nombres:</label>
                                  <input type="text" class="form-control" id="nombre_pacientes" name="nombre_pacientes" value="<?php echo $resEdit->nombre_pacientes; ?>"  placeholder="Nombres">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="apellido_pacientes" class="control-label">Apellidos:</label>
                                  <input type="text" class="form-control" id="apellido_pacientes" name="apellido_pacientes" value="<?php echo $resEdit->apellido_pacientes; ?>"  placeholder="Apellidos">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div>
		       
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="fecha_nacimiento_pacientes" class="control-label">Fecha Nacimiento:</label>
                                  <input type="date" class="form-control" id="fecha_nacimiento_pacientes" name="fecha_nacimiento_pacientes" value="<?php echo $resEdit->fecha_nacimiento_pacientes; ?>"  placeholder="Fecha Nacimiento">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="edad_pacientes" class="control-label" readonly>Edad:</label>
                                  <input type="text" class="form-control" id="edad_pacientes" name="edad_pacientes" value="<?php echo $resEdit->edad_pacientes; ?>"  placeholder="Edad">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="id_sexo" class="control-label">Sexo:</label>
                                  <select name="id_sexo" id="id_sexo"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultSexo as $res) {?>
										<option value="<?php echo $res->id_sexo; ?>" <?php if ($res->id_sexo == $resEdit->id_sexo )  echo  ' selected="selected" '  ;  ?>  ><?php echo $res->nombre_sexo; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
                                  
            </div>
            </div>
			</div> 
			
			<div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="id_estado_civil" class="control-label">Estado Civil:</label>
                                  <select name="id_estado_civil" id="id_estado_civil"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEstadoCivil as $res) {?>
										<option value="<?php echo $res->id_estado_civil; ?>" <?php if ($res->id_estado_civil == $resEdit->id_estado_civil )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_estado_civil; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
                                  
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="telefono_pacientes" class="control-label">Teléfono:</label>
                                  <input type="text" class="form-control" id="telefono_pacientes" name="telefono_pacientes" value="<?php echo $resEdit->telefono_pacientes; ?>"  placeholder="Teléfono">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="celular_pacientes" class="control-label" readonly>Celular:</label>
                                  <input type="text" class="form-control" id="celular_pacientes" name="celular_pacientes" value="<?php echo $resEdit->celular_pacientes; ?>"  placeholder="Celular">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div> 
			
			<div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group ">
		                           <label for="id_paises" class="control-label">Pais:</label>
                                  <select name="id_paises" id="id_paises"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultPais as $res) {?>
										<option value="<?php echo $res->id_paises; ?>" <?php if ($res->id_paises == $resEdit->id_paises )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_paises; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
		    
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                   <label for="id_provincias" class="control-label">Provincia:</label>
                                  <select name="id_provincias" id="id_provincias"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultProv as $res) {?>
										<option value="<?php echo $res->id_provincias; ?>" <?php if ($res->id_provincias == $resEdit->id_provincias )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_provincias; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                   <label for="id_cantones" class="control-label">Cantón:</label>
                                  <select name="id_cantones" id="id_cantones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCan as $res) {?>
										<option value="<?php echo $res->id_cantones; ?>" <?php if ($res->id_cantones == $resEdit->id_cantones )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_cantones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
            </div>
			</div>
			
			<div class="row">
		    <div class="col-xs-6 col-md-12">
		    <div class="form-group">
                                  <label for="direccion_pacientes" class="control-label">Dirección:</label>
                                  <input type="text" class="form-control" id="direccion_pacientes" name="direccion_pacientes" value="<?php echo $resEdit->direccion_pacientes; ?>"  placeholder="Domicilio">
                                  <span class="help-block"></span>
            </div>
            </div>
            </div> 
		    
		    
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="id_ocupaciones" class="control-label">Ocupación</label>
                                  <select name="id_ocupaciones" id="id_ocupaciones"  class="form-control" >
			  	       					 <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultOcu as $resOcu) {?>
										<option value="<?php echo $resOcu->id_ocupaciones; ?>"   <?php if ($resOcu->id_ocupaciones == $resEdit->id_ocupaciones )  echo  ' selected="selected" '  ;  ?>><?php echo $resOcu->nombre_ocupaciones; ?> </option>
			        				<?php } ?>
									</select> 
                                   <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="id_tipo_sangre" class="control-label">Tipo Sangre</label>
                                  <select name="id_tipo_sangre" id="id_tipo_sangre"  class="form-control" >
                                        <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultTipoSangre as $res) {?>
										<option value="<?php echo $res->id_tipo_sangre; ?>"   <?php if ($res->id_tipo_sangre == $resEdit->id_tipo_sangre )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_tipo_sangre; ?> </option>
			       					<?php } ?>
								  </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
			<div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="fotografia_pacientes" class="control-label">Fotografía</label>
                                  <input type="file" class="form-control" id="fotografia_pacientes" name="fotografia_pacientes" value="">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div>  
			 
            </div>
            <div class="col-lg-2">
            </div>
            </div>
		
            
            
		     <?php } } else {?>
		    
			<div class="col-lg-12">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
            <h4 style="color:#ec971f;">Datos del Paciente</h4>
            <hr/>
            <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="cedula_pacientes" class="control-label">Cedula:</label>
                                  <input type="text" class="form-control" id="cedula_pacientes" name="cedula_pacientes" value=""  placeholder="Cedula">
                                  <span class="help-block"></span>
            </div>
		    </div>
			<div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="nombre_pacientes" class="control-label">Nombres:</label>
                                  <input type="text" class="form-control" id="nombre_pacientes" name="nombre_pacientes" value=""  placeholder="Nombres">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="apellido_pacientes" class="control-label">Apellidos:</label>
                                  <input type="text" class="form-control" id="apellido_pacientes" name="apellido_pacientes" value=""  placeholder="Apellidos">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div>
		       
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="fecha_nacimiento_pacientes" class="control-label">Fecha Nacimiento:</label>
                                  <input type="date" class="form-control" id="fecha_nacimiento_pacientes" name="fecha_nacimiento_pacientes" value=""  placeholder="Fecha Nacimiento">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="edad_pacientes" class="control-label" readonly>Edad:</label>
                                  <input type="text" class="form-control" id="edad_pacientes" name="edad_pacientes" value=""  placeholder="Edad">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="id_sexo" class="control-label">Sexo:</label>
                                  <select name="id_sexo" id="id_sexo"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultSexo as $res) {?>
										<option value="<?php echo $res->id_sexo; ?>"  ><?php echo $res->nombre_sexo; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
                                  
            </div>
            </div>
			</div> 
			
			<div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="id_estado_civil" class="control-label">Estado Civil:</label>
                                  <select name="id_estado_civil" id="id_estado_civil"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEstadoCivil as $res) {?>
										<option value="<?php echo $res->id_estado_civil; ?>"  ><?php echo $res->nombre_estado_civil; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
                                  
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="telefono_pacientes" class="control-label">Teléfono:</label>
                                  <input type="text" class="form-control" id="telefono_pacientes" name="telefono_pacientes" value=""  placeholder="Teléfono">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="celular_pacientes" class="control-label" readonly>Celular:</label>
                                  <input type="text" class="form-control" id="celular_pacientes" name="celular_pacientes" value=""  placeholder="Celular">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div> 
			
			<div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group ">
		                           <label for="id_paises" class="control-label">Pais:</label>
                                  <select name="id_paises" id="id_paises"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultPais as $res) {?>
										<option value="<?php echo $res->id_paises; ?>"  ><?php echo $res->nombre_paises; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
		    
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                   <label for="id_provincias" class="control-label">Provincia:</label>
                                  <select name="id_provincias" id="id_provincias"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultProv as $res) {?>
										<option value="<?php echo $res->id_provincias; ?>"  ><?php echo $res->nombre_provincias; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                   <label for="id_cantones" class="control-label">Cantón:</label>
                                  <select name="id_cantones" id="id_cantones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCan as $res) {?>
										<option value="<?php echo $res->id_cantones; ?>"  ><?php echo $res->nombre_cantones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
            </div>
			</div>
			
			<div class="row">
		    <div class="col-xs-6 col-md-12">
		    <div class="form-group">
                                  <label for="direccion_pacientes" class="control-label">Dirección:</label>
                                  <input type="text" class="form-control" id="direccion_pacientes" name="direccion_pacientes" value=""  placeholder="Domicilio">
                                  <span class="help-block"></span>
            </div>
            </div>
            </div> 
		    
		    
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="id_ocupaciones" class="control-label">Ocupación</label>
                                  <select name="id_ocupaciones" id="id_ocupaciones"  class="form-control" >
			  	       					 <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultOcu as $resOcu) {?>
										<option value="<?php echo $resOcu->id_ocupaciones; ?>"  ><?php echo $resOcu->nombre_ocupaciones; ?> </option>
			        				<?php } ?>
									</select> 
                                   <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="id_tipo_sangre" class="control-label">Tipo Sangre</label>
                                  <select name="id_tipo_sangre" id="id_tipo_sangre"  class="form-control" >
                                        <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultTipoSangre as $res) {?>
										<option value="<?php echo $res->id_tipo_sangre; ?>"  ><?php echo $res->nombre_tipo_sangre; ?> </option>
			       					<?php } ?>
								  </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
			<div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="fotografia_pacientes" class="control-label">Fotografía</label>
                                  <input type="file" class="form-control" id="fotografia_pacientes" name="fotografia_pacientes" value="">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div>  
			 
            </div>
            <div class="col-lg-2">
            </div>
            </div>
			
		    
		   
               	
		     <?php } ?>
		     
		     
		     <div class="row" style="text-align: center;">
			 <div class="col-lg-12" >
		     <div class="col-lg-5">
			 </div>
			 <div class="col-lg-2" style="margin-top: 20px">
			 <button type="submit" id="Guardar" name="Guardar" class="btn btn-success btn-block" ><i class='glyphicon glyphicon-plus'></i> Guardar</button>
			 </div>
			 <div class="col-lg-5">
			 </div>
			 </div>
			 </div>    
               
		
            </form>
             
             
             
             <form action="<?php echo $helper->url("Pacientes","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
     		<br>
     		<div class="col-lg-12">
     		<div class="well">
     		<h4 style="color:#ec971f;">Pacientes Registrados</h4>
            <div class="row">
            <div class="col-xs-3 col-md-3 col-lg-3">
		    <div class="form-group">
                                  
                                  <input type="text" class="form-control" id="contenido" name="contenido" value="">
                                  
            </div>
		    </div>
		    <div class="col-xs-3 col-md-3 col-lg-3">
		    <div class="form-group">
                                  
                                  <select name="criterio" id="criterio"  class="form-control">
                                    <?php foreach($resultMenu as $val=>$desc) {?>
                                         <option value="<?php echo $val ?>" ><?php echo $desc ?> </option>
                                    <?php } ?>
                                  </select>
            </div>
		    </div>
		    <div class="col-xs-4 col-md-4 col-lg-4">
		    <div class="form-group">
                                  
                                  <button type="submit" id="Buscar" name="Buscar" class="btn btn-info"><i class='glyphicon glyphicon-search'></i></button>
            </div>
		    </div>
			</div> 
			
			<div class="datagrid"> 
       <section style="height:250px; overflow-y:scroll;">
       <table class="table table-hover ">
       
       <thead>
           <tr>
		             <th style="font-size:100%;"></th>
		            <th style="font-size:100%;">Historia</th>
		    		<th style="font-size:100%;">Cedula</th>
		    		<th style="font-size:100%;">Nombres y Apellidos</th>
		    		<th style="font-size:100%;">Edad</th>
		    		<th style="font-size:100%;">Sexo</th>
		    		<th style="font-size:100%;">Estado Civil</th>
		    		<th style="font-size:100%;">Telefono</th>
		    		<th style="font-size:100%;">Celular</th>
		    		<th style="font-size:100%;">Ocupación</th>
		    		<th style="font-size:100%;">Sangre</th>
		    		<th style="font-size:100%;">Dirección</th>
		    		<th></th>
		    		<th></th>
		    	
		    	
	  		</tr>
	   </thead>
       <tfoot>
       		<tr>
					<td colspan="14">
						<div id="paging">
							<ul>
								<li>
									<a href="#">
						<span>Previous</span>
									</a>
								</li>
								<li>
									<a href="#" class="active">
						<span>1</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>2</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>3</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>4</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>5</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>Next</span>
									</a>
								</li>
								</ul>
						</div>
					
			</tr>
       				
       </tfoot>
       
                <?php if (!empty($resultSet)) {  foreach($resultSet as $res) {?>
	        	 
               
	   <tbody>
	   		<tr>
	        		   <td> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_pacientes; ?>&id_nombre=id_pacientes&tabla=pacientes&campo=fotografia_pacientes"  alt="<?php echo $res->id_pacientes; ?>" width="50" height="50"></td>
		               <td style="font-size:80%;"> <?php echo $res->numero_historia_pacientes;?></td>
		               <td style="font-size:80%;"> <?php echo $res->cedula_pacientes;?></td> 
		               <td style="font-size:80%;"> <?php echo $res->nombre_pacientes;?> <?php echo $res->apellido_pacientes; ?></td>
		               <td style="font-size:80%;"> <?php echo $res->edad_pacientes;?></td>
		               <td style="font-size:80%;"> <?php echo $res->nombre_sexo;?></td>
		               <td style="font-size:80%;"> <?php echo $res->nombre_estado_civil;?></td>
		               <td style="font-size:80%;"> <?php echo $res->telefono_pacientes;?></td>
		               <td style="font-size:80%;"> <?php echo $res->celular_pacientes;?></td>
		               <td style="font-size:80%;"> <?php echo $res->nombre_ocupaciones;?></td>
		                <td style="font-size:80%;"> <?php echo $res->nombre_tipo_sangre;?></td>
		                 <td style="font-size:80%;"> <?php echo $res->direccion_pacientes;?></td>
		           	   
		           	   
		           	   
		           	   <td>
			           			<div class="right">
			                    	<a href="<?php echo $helper->url("Pacientes","index"); ?>&id_pacientes=<?php echo $res->id_pacientes; ?>" class="btn btn-warning" style="font-size:85%;"><i class='glyphicon glyphicon-edit'></i></a>
			               		</div>
			            
			           </td>
			           <td>   
			                	<div class="right">
			                    	<a href="<?php echo $helper->url("Pacientes","borrarId"); ?>&id_pacientes=<?php echo $res->id_pacientes; ?>" class="btn btn-danger" style="font-size:85%;"><i class="glyphicon glyphicon-trash"></i></a>
			                	</div>
			           </td>
		              
		     </tr>
	   
	   </tbody>	
	        		
		        <?php } }else{ ?>
            <tr>
            <td></td>
            <td></td>
	                   <td colspan="5" style="color:#ec971f;font-size:8;"> <?php echo '<span id="snResult">No existen resultados</span>' ?></td>
	        <td></td>
		               
		    </tr>
            <?php 
		}
            //echo "<script type='text/javascript'> alert('Hola')  ;</script>";
            
            ?>
            
       	</table>     
		     
      </section>
      
       </div>
		</div>	 
     		</div>
     	
       
          </form>
   
             
       
      </div>
      </div>
      
      <br>
   <br>
   <br>	 
  <?php include("view/modulos/footer.php"); ?>
     </body>  
    </html>   