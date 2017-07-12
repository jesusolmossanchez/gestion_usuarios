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
                                <h4 class="title">Socios</h4>
                                <p class="category"></p>
                            </div>
                        </div>
                        <a href="<?php echo base_url()?>admin/socios/crear" style="margin-right: 20px; margin-bottom: 20px;" class="btn btn-info btn-fill pull-left">+ Nuevo</a>
                        <div class="content table-responsive table-full-width col-md-12">
                            <table id="table_socios" class="table table-hover col-md-12">
                                <thead>
                                    <th>Nº Socio</th>
                                    <th>Nombre Usuario</th>
                                    <th>Editar</th>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($socios as $socio) {
                                    ?>
                                    <tr>
                                        <td class="td_text_con_imagen ">
                                            <?php echo $socio->codigo_socio; ?>
                                        </td>
                                        <td class="td_text_con_imagen ">
                                            <?php echo $socio->nombre_usuario." ".$socio->apellidos_usuario; ?>
                                        </td>
                                        <td class="">
                                            <a href="<?php echo base_url(); ?>admin/socios/<?php echo $socio->id; ?>">
                                                <i data-idsocio="<?php echo $socio->id; ?>" class="editar_table editar_socio  pe-7s-note"></i>
                                            </a>
                                        </td>
                                    </tr>  
                                    <?php
                                        } 
                                    ?>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
