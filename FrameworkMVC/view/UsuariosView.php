		<?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/head.php"); ?>
       
       
<!DOCTYPE HTML>
<html lang="es">

      <head>
          <meta charset="utf-8"/>
         <title>Usuarios - Clinica 2016</title>
      
      
      
		  <link rel="stylesheet" href="view/css/bootstrap.css">
          <script src="view/js/jquery.js"></script>
		  <script src="view/js/bootstrapValidator.min.js"></script>
		  
		  
	
	<script>
	$(document).ready(function() {
		//Validacion con BootstrapValidator
		fl = $('#form-usuarios');
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
	        //Cuando el formulario se lleno correctamente y se envia, se ejecuta esta funcion
	    
	    });
	});
	</script>
	
	
			
    </head>
    <body>
    
      <?php include("view/modulos/menu.php"); ?>
    
  	  <div class="container">
  
  	  <div class="row" style="background-color: #FAFAFA;">
      
      <!-- empieza el form --> 
       
      <form  id="form-usuarios" action="<?php echo $helper->url("Usuarios","InsertaUsuarios"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
            <br>
           
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
            
            <div class="col-lg-12">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
            <h4 style="color:#ec971f;">Datos del Usuario</h4>
            <hr/>
            <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="cedula_usuarios" class="control-label">Cedula</label>
                                  <input type="text" class="form-control" id="cedula_usuarios" name="cedula_usuarios" value="<?php echo $resEdit->cedula_usuarios; ?>"  placeholder="Cedula">
                                  <span class="help-block"></span>
            </div>
		    </div>
		
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="nombre_usuarios" class="control-label">Nombres Usuario</label>
                                  <input type="text" class="form-control" id="nombre_usuarios" name="nombre_usuarios" value="<?php echo $resEdit->nombre_usuarios; ?>"  placeholder="Nombre">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="usuario_usuarios" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="usuario_usuarios" name="usuario_usuarios" value="<?php echo $resEdit->usuario_usuarios; ?>"  placeholder="Usuario">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div>
            
			<div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="clave_usuarios" class="control-label">Clave</label>
                                  <input type="password" class="form-control" id="clave_usuarios" name="clave_usuarios" value=""  placeholder="Clave">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="cclave_usuarios" class="control-label">Confirme Clave</label>
                                  <input type="password" class="form-control" id="cclave_usuarios" name="cclave_usuarios" value=""  placeholder="Confirme Clave">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="correo_usuarios" class="control-label">Correo</label>
                                <input type="text" class="form-control" id="correo_usuarios" name="correo_usuarios" value="<?php echo $resEdit->correo_usuarios; ?>"  placeholder="Correo">
                                  <span class="help-block"></span>
                                  
            </div>
            </div>
			</div>  
			
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="telefono_usuarios" class="control-label">Teléfono</label>
                                  <input type="text" class="form-control" id="telefono_usuarios" name="telefono_usuarios" value="<?php echo $resEdit->telefono_usuarios; ?>"  placeholder="Teléfono">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="celular_usuarios" class="control-label">Celular</label>
                                  <input type="text" class="form-control" id="celular_usuarios" name="celular_usuarios" value="<?php echo $resEdit->celular_usuarios; ?>"  placeholder="Celular">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="id_rol" class="control-label">Roles</label>
                                  <select name="id_rol" id="id_rol"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultRol as $resRol) {?>
										<option value="<?php echo $resRol->id_rol; ?>" <?php if ($resRol->id_rol == $resEdit->id_rol )  echo  ' selected="selected" '  ;  ?> ><?php echo $resRol->nombre_rol; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div> 
		    
		    
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="estados" class="control-label">Estado</label>
                                  <select name="estados" id="estados"  class="form-control" >
			  	       					 <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEst as $resEst) {?>
										<option value="<?php echo $resEst->id_estado; ?>" <?php if ($resEst->id_estado == $resEdit->id_estado )  echo  ' selected="selected" '  ;  ?> ><?php echo $resEst->nombre_estado; ?> </option>
			        				<?php } ?>
									</select> 
                                   <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="id_entidad" class="control-label">Entidad</label>
                                  <select name="id_entidad" id="id_entidad"  class="form-control" >
                                        <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEntidad as $resCiu) {?>
										<option value="<?php echo $resCiu->id_entidades; ?>"  <?php if ($resCiu->id_entidades == $resEdit->id_entidades ) echo ' selected="selected" '  ; ?> ><?php echo $resCiu->nombre_entidades; ?> </option>
			       					<?php } ?>
								  </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
			<div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="imagen_usuarios" class="control-label">Fotografía</label>
                                  <input type="file" class="form-control" id="imagen_usuarios" name="imagen_usuarios" value="">
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
            <h4 style="color:#ec971f;">Datos del Usuario</h4>
            <hr/>
            <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="cedula_usuarios" class="control-label">Cedula</label>
                                  <input type="text" class="form-control" id="cedula_usuarios" name="cedula_usuarios" value=""  placeholder="Cedula">
                                  <span class="help-block"></span>
            </div>
		    </div>
			<div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="nombre_usuarios" class="control-label">Nombres Usuario</label>
                                  <input type="text" class="form-control" id="nombre_usuarios" name="nombre_usuarios" value=""  placeholder="Nombre">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="usuario_usuarios" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="usuario_usuarios" name="usuario_usuarios" value=""  placeholder="Usuario">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div>
		       
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="clave_usuarios" class="control-label">Clave</label>
                                  <input type="password" class="form-control" id="clave_usuarios" name="clave_usuarios" value=""  placeholder="Clave">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="cclave_usuarios" class="control-label">Confirme Clave</label>
                                  <input type="password" class="form-control" id="cclave_usuarios" name="cclave_usuarios" value=""  placeholder="Confirme Clave">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="correo_usuarios" class="control-label">Correo</label>
                                <input type="text" class="form-control" id="correo_usuarios" name="correo_usuarios" value=""  placeholder="Correo">
                                  <span class="help-block"></span>
                                  
            </div>
            </div>
			</div> 
			
			<div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="telefono_usuarios" class="control-label">Teléfono</label>
                                  <input type="text" class="form-control" id="telefono_usuarios" name="telefono_usuarios" value=""  placeholder="Teléfono">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="celular_usuarios" class="control-label">Celular</label>
                                  <input type="text" class="form-control" id="celular_usuarios" name="celular_usuarios" value=""  placeholder="Celular">
                                  <span class="help-block"></span>
            </div>
		    </div>
		     <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="id_rol" class="control-label">Roles</label>
                                  <select name="id_rol" id="id_rol"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultRol as $resRol) {?>
										<option value="<?php echo $resRol->id_rol; ?>"  ><?php echo $resRol->nombre_rol; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div> 
		    
		    
		    <div class="row">
		    <div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="estados" class="control-label">Estado</label>
                                  <select name="estados" id="estados"  class="form-control" >
			  	       					 <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEst as $resEst) {?>
										<option value="<?php echo $resEst->id_estado; ?>"  ><?php echo $resEst->nombre_estado; ?> </option>
			        				<?php } ?>
									</select> 
                                   <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-3 col-md-4">
            <div class="form-group">
                                  <label for="id_entidad" class="control-label">Entidad</label>
                                  <select name="id_entidad" id="id_entidad"  class="form-control" >
                                        <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEntidad as $resCiu) {?>
										<option value="<?php echo $resCiu->id_entidades; ?>"  ><?php echo $resCiu->nombre_entidades; ?> </option>
			       					<?php } ?>
								  </select> 
                                  <span class="help-block"></span>
            </div>
		    </div>
			<div class="col-xs-3 col-md-4">
		    <div class="form-group">
                                  <label for="imagen_usuarios" class="control-label">Fotografía</label>
                                  <input type="file" class="form-control" id="imagen_usuarios" name="imagen_usuarios" value="">
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
       
         
       
       		<form action="<?php echo $helper->url("Usuarios","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
     		<br>
     		<div class="col-lg-12">
     		<div class="col-lg-1">
     		</div>
     		<div class="col-lg-10">
     		<div class="well">
     		<h4 style="color:#ec971f;">Usuarios Registrados</h4>
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
		    		<th style="font-size:100%;">Id</th>
		    		<th style="font-size:100%;">Nombre</th>
		    		<th style="font-size:100%;">Usuario</th>
		    		<th style="font-size:100%;">Correo</th>
		    		<th style="font-size:100%;">Rol</th>
		    		<th style="font-size:100%;">Estado</th>
		    		<th></th>
		    		<th></th>
		    	
	  		</tr>
	   </thead>
       <tfoot>
       		<tr>
					<td colspan="10">
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
	        		   <td> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_usuarios; ?>&id_nombre=id_usuarios&tabla=usuarios&campo=imagen_usuarios"  alt="<?php echo $res->id_usuarios; ?>" width="50" height="50"></td>
		               <td style="font-size:80%;"> <?php echo $res->id_usuarios; ?></td>
		               <td style="font-size:80%;"> <?php echo $res->nombre_usuarios; ?>     </td> 
		               <td style="font-size:80%;"> <?php echo $res->usuario_usuarios; ?>  </td>
		               <td style="font-size:80%;"> <?php echo $res->correo_usuarios; ?>  </td>
		               <td style="font-size:80%;"> <?php echo $res->nombre_rol; ?>  </td>
		               <td style="font-size:80%;"> <?php echo $res->nombre_estado; ?>  </td>
		           	   <td>
			           			<div class="right">
			                    	<a href="<?php echo $helper->url("Usuarios","index"); ?>&id_usuarios=<?php echo $res->id_usuarios; ?>" class="btn btn-warning" style="font-size:85%;"><i class='glyphicon glyphicon-edit'></i></a>
			               		</div>
			            
			           </td>
			           <td>   
			                	<div class="right">
			                    	<a href="<?php echo $helper->url("Usuarios","borrarId"); ?>&id_usuarios=<?php echo $res->id_usuarios; ?>" class="btn btn-danger" style="font-size:85%;"><i class="glyphicon glyphicon-trash"></i></a>
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
     		<div class="col-lg-1">
     		</div>
     		</div>
     	
       
          </form>
      
      </div>
      </div>
   
   <br>
   <br>
   <br>	 		 
			 <footer class="col-lg-12">
			 <?php include("view/modulos/footer.php"); ?>
			 </footer> 
			 </body>  
			 </html>   