
<?php include("view/modulos/modal.php"); ?>
        <?php include("view/modulos/head.php"); ?>

<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Actualizar Usuarios - Clinica 2016</title>
        
          <link rel="stylesheet" href="view/css/bootstrap.css">
          <script src="view/js/jquery.js"></script>
		  <script src="view/js/bootstrapValidator.min.js"></script>
		

		
		<script>
	$(document).ready(function() {
		//Validacion con BootstrapValidator
		fl = $('#form-actualizar-usuarios');
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
     <div class="row" style="background-color: #ffffff;">
 
    
      <!-- empieza el form --> 
        
      <form id="form-actualizar-usuarios" action="<?php echo $helper->url("Usuarios","Actualiza"); ?>" method="post" enctype="multipart/form-data" class="col-lg-6">
            <br>
            <h4 style="color:#ec971f;">Actualizar Datos del Usuario</h4>
            <hr>
            <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
            
            
            <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="cedula_usuarios" class="control-label">Cedula</label>
                                  <input type="text" class="form-control" id="cedula_usuarios" name="cedula_usuarios" value="<?php echo $resEdit->cedula_usuarios; ?>"  placeholder="Cedula" readonly>
                                  <span class="help-block"></span>
            </div>
		    </div>
		    </div>
		    <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="nombre_usuarios" class="control-label">Nombres Usuario</label>
                                  <input type="text" class="form-control" id="nombre_usuarios" name="nombre_usuarios" value="<?php echo $resEdit->nombre_usuarios; ?>"  placeholder="Nombre">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-6 col-md-6">
            <div class="form-group">
                                  <label for="usuario_usuarios" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="usuario_usuarios" name="usuario_usuarios" value="<?php echo $resEdit->usuario_usuarios; ?>"  placeholder="Usuario">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div>
            
			<div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="clave_usuarios" class="control-label">Clave</label>
                                  <input type="password" class="form-control" id="clave_usuarios" name="clave_usuarios" value=""  placeholder="Clave">
                                  <span class="help-block"></span>
            </div>
            </div>
            <div class="col-xs-6 col-md-6">
            <div class="form-group">
                                  <label for="cclave_usuarios" class="control-label">Confirme Clave</label>
                                  <input type="password" class="form-control" id="cclave_usuarios" name="cclave_usuarios" value=""  placeholder="Confirme Clave">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    </div>
		    
		   
			  
			
		    <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="correo_usuarios" class="control-label">Correo</label>
                                <input type="text" class="form-control" id="correo_usuarios" name="correo_usuarios" value="<?php echo $resEdit->correo_usuarios; ?>"  placeholder="Correo">
                                  <span class="help-block"></span>
                                  
            </div>
            </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="telefono_usuarios" class="control-label">Teléfono</label>
                                  <input type="text" class="form-control" id="telefono_usuarios" name="telefono_usuarios" value="<?php echo $resEdit->telefono_usuarios; ?>"  placeholder="Teléfono">
                                  <span class="help-block"></span>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-xs-6 col-md-6">
            <div class="form-group">
                                  <label for="celular_usuarios" class="control-label">Celular</label>
                                  <input type="text" class="form-control" id="celular_usuarios" name="celular_usuarios" value="<?php echo $resEdit->celular_usuarios; ?>"  placeholder="Celular">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="imagen_usuarios" class="control-label">Fotografía</label>
                                  <input type="file" class="form-control" id="imagen_usuarios" name="imagen_usuarios" value="">
                                  <span class="help-block"></span>
            </div>
		    </div>
			</div> 
		    
		    
		  
                   
            
		     <?php } } else {?>
		    
		  
               
               	
		     <?php } ?>
		  
            
             <div class="row" style="text-align: center;">
			 <div class="col-lg-12" >
		     <div class="col-lg-5">
			 </div>
			 <div class="col-lg-3" style="margin-top: 20px">
			 <button type="submit" id="Guardar" name="Guardar" class="btn btn-success btn-block">Actualizar</button>
			 </div>
			 <div class="col-lg-4">
			 </div>
			 </div>
			 </div>  
             <hr>
                   
          	</form>
                   
        <div class="col-lg-6">
        <br>
        <br>
        <br>
        <div class="row">
        <div class="col-xs-12 col-md-12" style="margin-top:10px">
        <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $_SESSION['id_usuarios']; ?>&id_nombre=id_usuarios&tabla=usuarios&campo=imagen_usuarios"  alt="<?php echo $_SESSION['id_usuarios'];?>" width="450" height="400"  style="float:left;" >
 		</div>
 		</div>

        
        </div>
       </div>
       </div>
       <br>
         <br>
           <br>
       <?php include("view/modulos/footer.php"); ?>
     </body>  
    </html>   