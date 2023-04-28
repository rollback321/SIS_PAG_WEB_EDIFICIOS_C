


<script src="<?= base_url()?>/plug_administracion/menu_body.js"></script>




<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content p-2">
                        <!-- <ul class="nav nav-pills p-2" id="myTab" role="tablist">
							<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-bs-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">PROPIETARIOS</a>							</li>
							<li class="nav-item" role="presentation"> <a class="nav-link" data-toggle="modal" data-target="#modalRegistrarPropietario" data-bs-toggle="tab" role="tab" aria-controls="profile" aria-selected="false">REGISTRAR PROPIETARIO</a></li>
                            <li class="nav-item" role="presentation"> <a class="nav-link" aria-selected="false" href = "" >EDIFICIOS</a></li>
						</ul> -->

                            
                                            <div class="card card-primary card-tabs">
                                                    <div class="card-header p-0 pt-1">
                                                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">PROPIETARIOS</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">EDIFICIOS</a>
                                                                </li>
                                                        </ul>
                                                    </div>

                                                    <div class="card-body">
                                                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                                                                 <!-- TABLA CONTENIDO DE TABLA -->
                                                                                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                                                                                    <button type="button" class="btn btn-block btn-outline-primary " style="width: 200px; "  data-toggle="modal" data-target="#modalRegistrarPropietario" data-bs-toggle="tab">REGISTRAR PROPIETARIO</button>
                                                                                                    <div class="tab-content p-3" id="myTabContent">
                                                                                                                <div class="tab-pane fade show active" id="documentosAVencer" role="tabpanel" aria-labelledby="home-tab">
                                                                                                                    <div class="table-responsive">
                                                                                                                        <table  class="table  table-striped table-bordered mb-0  " id="tableInicio">
                                                                                                                            <thead class="">
                                                                                                                                <tr>
                                                                                                                                    <th>Nro.</th>
                                                                                                                                    <th>Nombre</th>
                                                                                                                                    <th>Apellidos</th>
                                                                                                                                    <th>C.I.</th>
                                                                                                                                    <th>Celular</th>
                                                                                                                                    <th>Correo</th>
                                                                                                                                    <th>Opciones</th>
                                                                                                                                </tr>
                                                                                                                            </thead>
                                                                                                                            <tbody>
                                                                                                                                
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="tab-pane fade" id="documentosVencidos" role="tabpanel" aria-labelledby="btnDocExpirado">
                                                                                                                    <div class="table-responsive">
                                                                                                                        <table class="table  table-striped table-bordered mb-0" id="tableInicioExpirados">
                                                                                                                            <thead class="thead-dark">
                                                                                                                                <tr>
                                                                                                                                    <th>Nro.</th>
                                                                                                                                    <th>Nombre</th>
                                                                                                                                    <th>Apellidos</th>
                                                                                                                                    <th>C.I.</th>
                                                                                                                                    <th>Celular</th>
                                                                                                                                    <th>Correo</th>
                                                                                                                                    <th>Opciones</th>
                                                                                                                                </tr>
                                                                                                                            </thead>
                                                                                                                            <tbody>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="tab-pane fade" id="documentosDevueltos" role="tabpanel" aria-labelledby="btnDocDevueltos">
                                                                                                                    <div class="table-responsive">
                                                                                                                        <table class="table  table-striped table-bordered mb-0" id="tableInicioDevueltos">
                                                                                                                            <thead class="thead-dark">
                                                                                                                                <tr>
                                                                                                                                    <th>Nro.</th>
                                                                                                                                    <th>Nombre</th>
                                                                                                                                    <th>Apellidos</th>
                                                                                                                                    <th>C.I.</th>
                                                                                                                                    <th>Celular</th>
                                                                                                                                    <th>Correo</th>
                                                                                                                                    <th>Opciones</th>
                                                                                                                                </tr>
                                                                                                                            </thead>
                                                                                                                            <tbody>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="tab-pane fade" id="documentosLegalizados" role="tabpanel" aria-labelledby="btnDoclegalizados">
                                                                                                                    <div class="table-responsive">
                                                                                                                        <table class="table  table-striped table-bordered mb-0" id="tableInicioLegalizados">
                                                                                                                            <thead class="thead-dark">
                                                                                                                                <tr>
                                                                                                                                    <th>Nro.</th>
                                                                                                                                    <th>Nombre</th>
                                                                                                                                    <th>Apellidos</th>
                                                                                                                                    <th>C.I.</th>
                                                                                                                                    <th>Celular</th>
                                                                                                                                    <th>Correo</th>
                                                                                                                                    <th>Opciones</th>
                                                                                                                                </tr>
                                                                                                                            </thead>
                                                                                                                            <tbody>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                     </div><!-- <div class="tab-content p-3"> -->
                                   
                                                                                </div><!-- <div class="tab-pane fade show active" -->
                                                                   
                                                                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                                                     
                                                                
                                                                                </div>                                                                  
                                                                     </div><!-- <div class="tab-content"> -->
                                                     </div><!-- /.card -->
                                        </div> <!-- <div class="card card-primary > -->


                       
                    
<!-- ==========================================
                MODALES
========================================== -->
                       <!-- Modal registrar -->
                         <div class="modal fade" id="modalRegistrarPropietario" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPropietarioLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalRegistrarPropietarioLabel">Registrar propietario</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" id = "icon_cerrar_modal_registrar_propietario">&times;</span>
                                                        </button>
                                                    </div>



                                                    <div class="modal-body">
                                                                        <div class="card">                                                            
                                                                                <div class="p-1 border rounded" style="">
                                                                                    <form class="row g-3" id="forPropietario">
                                                                                        <div class="col-md-12">
                                                                                            <label for="nombrePropietario" class="form-label p-0 m-0">Nombre del propietario </label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="nombrePropietario" name="nombrePropietario" placeholder="Ingrese nombre del propietario">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="apellidosPropietario" class="form-label p-0 m-0">Apellidos paterno</label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="apellidosPropietario" name="apellidosPropietario" placeholder="Ingrese apellidos del propietario">                                                                               
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                     
                                                                                                          <div class="col-md-12">
                                                                                                                            <label for="ciPropietario" class="form-label p-0 m-0">C.I.</label>
                                                                                                                                <div class="row justify-content-center">
                                                                                                                                                <p class = "pl-md-6">Nro.: &nbsp;</p>  <input type="number" class="form-control form-control-sm col-5" id="ciPropietario" name="ciPropietario" placeholder="Ingrese C.I.">&nbsp;&nbsp;&nbsp;
                                                                                                                                    
                                                                                                                                                <p class = "pl-md-3">EXP: &nbsp;</p> 
                                                                                                                                                
                                                                                                                                                    <select class="form-control form-control-sm col-3" id = "expPropietario" name = "expPropietario">
                                                                                                                                                            <option>SIN EXP.</option>
                                                                                                                                                            <option>LP</option>
                                                                                                                                                            <option>OR</option>
                                                                                                                                                            <option>CBBA</option>
                                                                                                                                                            <option>PT</option>
                                                                                                                                                            <option>SCZ</option>
                                                                                                                                                            <option>BN</option>
                                                                                                                                                            <option>PA</option>
                                                                                                                                                            <option>TJ</option>
                                                                                                                                                            <option>CH</option>
                                                                                                                                                    </select>                                                                                   
                                                                                                                                </div>
                                                                                                                                <label>Complemento  (Seleccione..)</label>
                                                                                                                                <select class="form-control select2" style="width: 30%;"> 
                                                                                                                                        <option>Sin compl.</option>   
                                                                                                                                        <script>
                                                                                                                                            for (var i = 65; i <= 90; i++) {
                                                                                                                                            document.write('<option>-' + String.fromCharCode(i) + '</option>');
                                                                                                                                            }
                                                                                                                                        </script>
                                                                                                                                </select>                                                                                                                                            
                                                                                                         </div>
                                                                                                                                                                                                   
                                                                                        <div class="col-md-12">
                                                                                            <label for="celPropietario" class="form-label p-0 m-0">Celular</label>
                                                                                            <input type="number" class="form-control form-control-sm" id="celPropietario" name="celPropietario" placeholder="Ingrese celular">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="emailPropietario" class="form-label p-0 m-0">Correo electrónico (opcional) </label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="emailPropietario" name="emailPropietario" placeholder="Ingrese correo electronico">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal" id = "cerrar_modal_registrar_propietario">Cerrar</button> 
                                                                                                    <button class="btn btn-primary " type="submit" id="btnSubmit">Registrar datos</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>                                                          
                                                                        </div>

                                                    
                                                    </div>
                                                   
                                         </div>
                                </div>
                        </div>

                    <!-- Modificar registro -->
                        <div class="modal fade" id="modalModifcarRegistro" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPropietarioLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">

                                 
                                         <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalRegistrarPropietarioLabel">Modificar Registro</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>



                                                    <div class="modal-body">
                                                                        <div class="card">                                                            
                                                                                <div class="p-1 border rounded">
                                                                                    <form class="row g-3" id="forPropietario_modificar">
                                                                                        <div class="col-md-12">
                                                                                            <label for="nombrePropietario" class="form-label p-0 m-0">Nombre del propietario </label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="nombrePropietario_modificar" name="nombrePropietario_modificar" placeholder="Ingrese nombre del propietario">
                                                                                            <input type="hidden" class="form-control form-control-sm  " id="id_propietario_modificar" name="id_propietario_modificar" >
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="apellidosPropietario" class="form-label p-0 m-0">Apellidos</label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="apellidosPropietario_modificar" name="apellidosPropietario_modificar" placeholder="Ingrese apellidos del propietario">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="ciPropietario" class="form-label p-0 m-0">C.I.</label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="ciPropietario_modificar" name="ciPropietario_modificar" placeholder="Ingrese C.I. con el expedido o extension">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="celPropietario" class="form-label p-0 m-0">Celular</label>
                                                                                            <input type="number" class="form-control form-control-sm" id="celPropietario_modificar" name="celPropietario_modificar" placeholder="Ingrese celular">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="emailPropietario" class="form-label p-0 m-0">Correo electrónico (opcional) </label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="emailPropietario_modificar" name="emailPropietario_modificar" placeholder="Ingrese correo electronico">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> 
                                                                                                <button class="btn btn-primary " type="submit" id="btnSubmit">Modificar registro</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>                                                          
                                                                        </div>

                                                    
                                                    </div>
                                                  
                                         </div>
                                </div>
                          </div>





      
                        </div> 
                        
                    <!-- Modal ver edificios -->
                        <div class="modal fade" id="modal-xl">
                            <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Extra Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                       
<!-- Modal Registrar edificios -->
                        <div class="modal fade" id="ver">
                            <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Extra Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        

                        
    </div>
</div>


