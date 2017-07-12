
<div class="wrapper">
	<?php $this->load->view('admin/templates/sidebar_admin'); ?>
	<div class="main-panel">
	<?php $this->load->view('admin/templates/navbar_admin'); ?>


          <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain card-table">
                            <div class="header">
                                <?php 
                                    if(isset($socios)){
                                        echo '<h4 class="title">Editar socio</h4>';
                                    }
                                    else{
                                        echo '<h4 class="title">Nuevo socio</h4>';
                                    }
                                ?>
                                <p class="category"></p>
                            </div>
                        </div>


                        <?php 
                        	if(isset($socio)){
                        ?>
				                <div class="content">
		                         	<form id="form_crear_socio" action="<?php echo base_url()?>admin/guardar-socio" method="post">

		                            	<button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
		                                <a href="<?php echo base_url()?>admin/socior" style="margin-right: 20px; margin-bottom: 20px;" class="cancelar_form btn btn-fill pull-right">Cancelar</a>
										<div class="clearfix"></div>
		                   				
		                   				
		                   				
				                        <input type="hidden" name="idioma" value="<?php echo $socio_lang->id_idioma;?>">
				                        <input type="hidden" name="id" value="<?php echo $socio_lang->id;?>">
		                                <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
		                                <a href="<?php echo base_url()?>admin/socior" style="margin-right: 20px;" class="cancelar_form btn btn-fill pull-right">Cancelar</a>
		                                <div class="clearfix"></div>
		                            </form>
	                            </div>
			                       


                        <?php 
                        	}else{
                        ?>

				        <div class="content">
                            <form id="form_crear_socio" action="<?php echo base_url()?>admin/guardar-socio" method="post"  enctype="multipart/form-data">

                            	<button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
                                <a href="<?php echo base_url()?>admin/socior" style="margin-right: 20px; margin-bottom: 20px;" class="cancelar_form btn btn-fill pull-right">Cancelar</a>
								<div class="clearfix"></div>
                   				
                   				<div class="card">
		                            <div class="content">
		                            	<div class="row"> 
		                                    <div class="col-md-6">
		                                        <h2 class="titulo_seccion">General</h2>
		                                    </div>                                        
		                                </div>
		                                <div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Número de socio</label>
		                                            <input type="text" name="codigo_usuario" id="codigo_usuario" rows="1" class="form-control" placeholder="Número" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Número de cuenta</label>
		                                            <input type="text" name="numero_cuenta" id="numero_cuenta" rows="1" class="form-control" placeholder="Nº de cuenta" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Solicitud (IMAGEN)</label>
		                                            <input type="file" name="solicitud" id="solicitud" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Consentimiento (IMAGEN)</label>
		                                            <input type="file" name="consentimiento" id="consentimiento" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Fecha Alta</label>
		                                            <input type="date" name="fecha_alta" id="fecha_alta" rows="1" class="form-control" value="" />
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Motivo Alto</label>
		                                            <input type="text" name="motivo_alta" id="motivo_alta" rows="1" class="form-control" placeholder="motivo" value="" />
		                                        </div>
		                                    </div>                                    
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Fecha Baja</label>
		                                            <input type="date" name="fecha_baja" id="fecha_baja" rows="1" class="form-control" value="" />
		                                        </div>
		                                    </div>  
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Motivo Baja</label>
		                                            <input type="text" name="motivo_baja" id="motivo_baja" rows="1" class="form-control" placeholder="motivo" value="" />
		                                        </div>                                    
		                                    </div>  
		                                </div>
		                            </div>
		                        </div>    
		                        <div class="card">
		                            <div class="content">
		                            	<div class="row"> 
		                                    <div class="col-md-6">
		                                        <h2 class="titulo_seccion">Madre</h2>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Nombre de la Madre</label>
		                                            <input type="text" name="nombre_madre" id="nombre_madre" rows="1" class="form-control" placeholder="Nombre" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Apellidos de la Madre</label>
		                                            <input type="text" name="apellidos_madre" id="apellidos_madre" rows="1" class="form-control" placeholder="Apellidos" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>DNI de la Madre</label>
		                                            <input type="text" name="dni_madre" id="dni_madre" rows="1" class="form-control" placeholder="dni" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>DNI del madre (IMAGEN)</label>
		                                            <input type="file" name="dni_img_madre" id="dni_img_madre" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Dirección de la Madre</label>
		                                            <input type="text" name="direccion_madre" id="direccion_madre" rows="1" class="form-control" placeholder="direccion" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<!-- TODO: Hacer desplegable -->
		                                            <label>Localidad de la Madre</label>
		                                            <input type="text" name="localidad_madre" id="localidad_madre" rows="1" class="form-control" placeholder="Localidad" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<!-- TODO: Hacer desplegable -->
		                                            <label>Provincia de la Madre</label>
		                                            <input type="text" name="provincia_madre" id="provincia_madre" rows="1" class="form-control" placeholder="Provincia" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>C.P. de la Madre</label>
		                                            <input type="text" name="codigo_postal_madre" id="codigo_postal_madre" rows="1" class="form-control" placeholder="C.P." value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Teléfono móvil de la Madre</label>
		                                            <input type="text" name="movil_madre" id="movil_madre" rows="1" class="form-control" placeholder="Móvil" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Teléfono fijo de la Madre</label>
		                                            <input type="text" name="telefono_madre" id="telefono_madre" rows="1" class="form-control" placeholder="Teléfono" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Email de la Madre</label>
		                                            <input type="email" name="email_madre" id="email_madre" rows="1" class="form-control" placeholder="Email" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Fecha de nacimiento de la Madre</label>
		                                            <input type="date" name="email_madre" id="email_madre" rows="1" class="form-control" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                            </div>
		                        </div>
                   				<div class="card">
		                            <div class="content">
		                            	<div class="row"> 
		                                    <div class="col-md-6">
		                                        <h2 class="titulo_seccion">Padre</h2>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Nombre del Padre</label>
		                                            <input type="text" name="nombre_padre" id="nombre_padre" rows="1" class="form-control" placeholder="Nombre" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Apellidos del Padre</label>
		                                            <input type="text" name="apellidos_padre" id="apellidos_padre" rows="1" class="form-control" placeholder="Apellidos" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>DNI del Padre</label>
		                                            <input type="text" name="dni_padre" id="dni_padre" rows="1" class="form-control" placeholder="dni" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>DNI del padre (IMAGEN (IMAGEN)</label>
		                                            <input type="file" name="dni_img_padre" id="dni_img_padre" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Dirección del Padre</label>
		                                            <input type="text" name="direccion_padre" id="direccion_padre" rows="1" class="form-control" placeholder="direccion" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<!-- TODO: Hacer desplegable -->
		                                            <label>Localidad del Padre</label>
		                                            <input type="text" name="localidad_padre" id="localidad_padre" rows="1" class="form-control" placeholder="Localidad" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<!-- TODO: Hacer desplegable -->
		                                            <label>Provincia del Padre</label>
		                                            <input type="text" name="provincia_padre" id="provincia_padre" rows="1" class="form-control" placeholder="Provincia" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>C.P. del Padre</label>
		                                            <input type="text" name="codigo_postal_padre" id="codigo_postal_padre" rows="1" class="form-control" placeholder="C.P." value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Teléfono móvil del Padre</label>
		                                            <input type="text" name="movil_padre" id="movil_padre" rows="1" class="form-control" placeholder="Móvil" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Teléfono fijo del Padre</label>
		                                            <input type="text" name="telefono_padre" id="telefono_padre" rows="1" class="form-control" placeholder="Teléfono" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Email del Padre</label>
		                                            <input type="email" name="email_padre" id="email_padre" rows="1" class="form-control" placeholder="Email" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Fecha de nacimiento del Padre</label>
		                                            <input type="date" name="email_padre" id="email_padre" rows="1" class="form-control" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                            </div>
		                        </div>

		                        <div class="card">
		                            <div class="content">
		                            	<div class="row"> 
		                                    <div class="col-md-6">
		                                        <h2 class="titulo_seccion">Usuario</h2>
		                                    </div>                                        
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Fotografía del usuario (IMAGEN)</label>
		                                            <input type="file" name="foto_usuario" id="foto_usuario" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Nombre del Usuario</label>
		                                            <input type="text" name="nombre_usuario" id="nombre_usuario" rows="1" class="form-control" placeholder="Nombre" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Apellidos del Usuario</label>
		                                            <input type="text" name="apellidos_usuario" id="apellidos_usuario" rows="1" class="form-control" placeholder="Apellidos" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>DNI del Usuario</label>
		                                            <input type="text" name="dni_usuario" id="dni_usuario" rows="1" class="form-control" placeholder="dni" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>DNI del usuario (IMAGEN)</label>
		                                            <input type="file" name="dni_img_usuario" id="dni_img_usuario" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Dirección del Usuario</label>
		                                            <input type="text" name="direccion_usuario" id="direccion_usuario" rows="1" class="form-control" placeholder="direccion" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<!-- TODO: Hacer desplegable -->
		                                            <label>Localidad del Usuario</label>
		                                            <input type="text" name="localidad_usuario" id="localidad_usuario" rows="1" class="form-control" placeholder="Localidad" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                        	<!-- TODO: Hacer desplegable -->
		                                            <label>Provincia del Usuario</label>
		                                            <input type="text" name="provincia_usuario" id="provincia_usuario" rows="1" class="form-control" placeholder="Provincia" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>C.P. del Usuario</label>
		                                            <input type="text" name="codigo_postal_usuario" id="codigo_postal_usuario" rows="1" class="form-control" placeholder="C.P." value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Teléfono móvil del Usuario</label>
		                                            <input type="text" name="movil_usuario" id="movil_usuario" rows="1" class="form-control" placeholder="Móvil" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Teléfono fijo del Usuario</label>
		                                            <input type="text" name="telefono_usuario" id="telefono_usuario" rows="1" class="form-control" placeholder="Teléfono" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Email del Usuario</label>
		                                            <input type="email" name="email_usuario" id="email_usuario" rows="1" class="form-control" placeholder="Email" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Fecha de nacimiento del Usuario</label>
		                                            <input type="date" name="email_usuario" id="email_usuario" rows="1" class="form-control" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Diagnostico del Usuario</label>
		                                            <textarea name="diagnostico_usuario" id="diagnostico_usuario" rows="5" class="form-control"></textarea>
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Diagnostico del Usuario (IMAGEN)</label>
		                                            <input type="file" name="diagnostico_img_usuario" id="diagnostico_img_usuario" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Grado de dependencia del Usuario</label>
		                                            <input type="number" name="grado_dependencia_usuario" id="grado_dependencia_usuario" rows="1" class="form-control" placeholder="0" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Grado de dependencia del Usuario (IMAGEN)</label>
		                                            <input type="file" name="grado_dependencia_img_usuario" id="grado_dependencia_img_usuario" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Grado de discapacidad del Usuario</label>
		                                            <input type="number" name="grado_discapacidad_usuario" id="grado_discapacidad_usuario" rows="1" class="form-control" placeholder="0" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Grado de discapacidad del Usuario (IMAGEN)</label>
		                                            <input type="file" name="grado_discapacidad_img_usuario" id="grado_discapacidad_img_usuario" class="form-control add_required archivo_field" value="" />
		                                        </div>
		                                    </div>                                        
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Tipo de escolarización del Usuario</label>
		                                            <input type="text" name="tipo_escolarizacion_usuario" id="tipo_escolarizacion_usuario" rows="1" class="form-control" placeholder="Tipo" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Colegio del Usuario</label>
		                                            <input type="text" name="colegio_usuario" id="colegio_usuario" rows="1" class="form-control" placeholder="Colegio" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Movilidad del Usuario</label>
		                                            <input type="number" name="movilidad_usuario" id="movilidad_usuario" rows="1" class="form-control" placeholder="0" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
										<div class="row"> 
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <label>Nivel educativo del Usuario</label>
		                                            <input type="text" name="nivel_educativo_usuario" id="nivel_educativo_usuario" rows="1" class="form-control" placeholder="Colegio" value="" />
		                                        </div>
		                                    </div>                                      
		                                </div>
		                            </div>
		                        </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
                                <a href="<?php echo base_url()?>admin/socior" style="margin-right: 20px;" class="cancelar_form btn btn-fill pull-right">Cancelar</a>
                                <div class="clearfix"></div>
                            </form>
                         </div>
                        <?php 
                        	}
                        ?>
                    </div>
                </div>
            </div>
          </div>



    </div>
</div>
