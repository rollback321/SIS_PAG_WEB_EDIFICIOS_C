


<script src="<?= base_url()?>/plug_administracion/menu_body.js"></script>
<script src="<?= base_url()?>/plug_administracion/modal_ver_edificios.js"></script>




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
                       <!-- Modal registrar propietario -->
                         <div class="modal fade" id="modalRegistrarPropietario" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPropietarioLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                                    <div class="modal-header"   style = "background: rgb(60,141,188);background: linear-gradient(0deg, rgba(60,141,188,0.5970763305322129) 17%, rgba(60,141,188,1) 96%); ">
                                       
                                                    <img src="<?= base_url() ?>/icon_image/icon_edificio.jpg" alt="user-avatar" class="img-circle img-fluid" style = " width: 70px ; height: 70px;"> &nbsp;&nbsp; 
                                                        <h4 class="modal-title font-italic mt-2" id="modalRegistrarPropietarioLabel" style = "color:#FFFFFF">Propietario o propietaria del edificio</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" id = "icon_cerrar_modal_registrar_propietario">&times;</span>
                                                        </button>
                                                    </div>



                                                    <div class="modal-body">
                                                                        <div class="card">                                                            
                                                                                <div class="p-1 border rounded border-info" style="">
                                                                                    <form class="row g-3" id="forPropietario">
                                                                                        <div class="col-md-12 font-italic mt-2">
                                                                                            <label for="nombrePropietario" class="form-label p-0 m-0">Nombre</label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="nombrePropietario" name="nombrePropietario" placeholder="Ingrese nombre del propietario">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12 font-italic mt-2">
                                                                                            <label for="apellidoPaternoPropietario" class="form-label p-0 m-0">Apellidos</label>
                                                                                            <div class="row">
                                                                                                   <div class="col-5">
                                                                                                        <input type="text" class="form-control form-control-sm  " id="apellidoPaternoPropietario" name="apellidoPaternoPropietario" placeholder="Ap. Paterno">                                                                               
                                                                                                   </div>
                                                                                                   <div class="col-5">
                                                                                                        <input type="text" class="form-control form-control-sm  " id="apellidoMaternoPropietario" name="apellidoMaternoPropietario" placeholder="Ap. Materno">                                                                               
                                                                                                   </div>
                                                
                                                                                            </div>
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12 font-italic mt-2">
                                                                                            <label for="" style = "color:#66869A; " class="form-label p-0 m-0">Apellido de casada (opcional)</label>
                                                                                                    <div class="row">
                                                                                                        <div class="col-1">
                                                                                                        <label for="" class="pl-3" style = "color:#98999a; ">de </label> 
                                                                                                        </div>
                                                                                                        <div class="col-8">
                                                                                                                <input type="text" class="form-control form-control-sm  " id="OtroapellidoPropietario" name="OtroapellidoPropietario" placeholder="Introduzca, solo el apellido">                                                                               
                                                                                                         </div>
                                                                                                    </div>
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                     
                                                                                                          <div class="col-md-12">
                                                                                                                            <label for="ciPropietario" class="form-label p-0 m-0 font-italic mt-2">C.I.</label>
                                                                                                                                
                                                                                                                            <div class="row">
                                                                                                                                    <div class="col-6">
                                                                                                                                                    <input type="number" class="form-control form-control-sm " id="ciPropietario" name="ciPropietario" placeholder="Ingrese Nro. C.I.">
                                                                                                                                    </div>
                                                                                                                                    <div class="col-4">
                                                                                                                                                     <select class="form-control form-control-sm " id = "expPropietario" name = "expPropietario">
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
                                                                                                                            </div>          
                                                                                                                                        
                                                                                                                                    
                                                                                                                                                
                                                                                                                                                
                                                                                                                                                                                                                                   
                                                                                                                              <div style = "display: flex; justify-content: center;" class = "mt-2">
                                                                                                                                    <label style = "color:#66869A; align: center" class="font-italic mt-2">Complemento C.I. (si corresponde):&nbsp;</label>
                                                                                                                                    <select class="form-control-sm select2" style="width: 30%; align:center" name = "ciComplemento" id="ciComplemento"> 
                                                                                                                                         
                                                                                                                                    <option value = "1">Sin compl.</option> 

                                                                                                                                            <script>
                                                                                                                                                for (var i = 65; i <= 90; i++) {
                                                                                                                                                document.write('<option >-' + String.fromCharCode(i) + '</option>');
                                                                                                                                                }
                                                                                                                                            </script>
                                                                                                                                    </select> 
                                                                                                                             </div>                                                                                                                                           
                                                                                                         </div>
                                                                                                                                                                                                   
                                                                                        <div class="col-md-12">
                                                                                            <label for="celPropietario" class="form-label p-0 m-0 font-italic mt-2">Celular</label>
                                                                                            <input type="number" class="form-control form-control-sm" id="celPropietario" name="celPropietario" placeholder="Ingrese celular">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="emailPropietario" class="form-label p-0 m-0 font-italic mt-2">Correo electrónico (opcional) </label>
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

                    <!-- Modificar registro propietario -->
                        <div class="modal fade" id="modalModifcarRegistro" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPropietarioLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                                    <div class="modal-header"   style = "background: rgb(60,141,188);background: linear-gradient(0deg, rgba(60,141,188,0.5970763305322129) 17%, rgba(60,141,188,1) 96%); ">
                                       
                                                    <img src="<?= base_url() ?>/icon_image/icon_edificio.jpg" alt="user-avatar" class="img-circle img-fluid" style = " width: 70px ; height: 70px;"> &nbsp;&nbsp; 
                                                        <h4 class="modal-title font-italic mt-2" id="modalRegistrarPropietarioLabel" style = "color:#FFFFFF">Propietario o propietaria del edificio</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" id = "icon_cerrar_modal_registrar_propietario">&times;</span>
                                                        </button>
                                                    </div>



                                                    <div class="modal-body">
                                                                        <div class="card">                                                            
                                                                                <div class="p-1 border rounded border-info" style="">
                                                                                    <form class="row g-3" id="forPropietario_modificar">
                                                                                        <div class="col-md-12 font-italic mt-2">
                                                                                            <label for="nombrePropietario_modificar" class="form-label p-0 m-0">Nombre</label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="nombrePropietario_modificar" name="nombrePropietario_modificar" placeholder="Ingrese nombre del propietario">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12 font-italic mt-2">
                                                                                            <label for="apellidoPaternoPropietario_modificar" class="form-label p-0 m-0">Apellidos</label>
                                                                                            <div class="row">
                                                                                                   <div class="col-5">
                                                                                                   <input type="hidden" class="form-control form-control-sm  " id="id_propietario_modificar" name="id_propietario_modificar" >                                                                               
                                                                                                        <input type="text" class="form-control form-control-sm  " id="apellidoPaternoPropietario_modificar" name="apellidoPaternoPropietario_modificar" placeholder="Ap. Paterno">                                                                               
                                                                                                   </div>
                                                                                                   <div class="col-5">
                                                                                                        <input type="text" class="form-control form-control-sm  " id="apellidoMaternoPropietario_modificar" name="apellidoMaternoPropietario_modificar" placeholder="Ap. Materno">                                                                               
                                                                                                   </div>
                                                
                                                                                            </div>
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12 font-italic mt-2">
                                                                                            <label for="" style = "color:#66869A; " class="form-label p-0 m-0">Apellido de casada (opcional)</label>
                                                                                                    <div class="row">
                                                                                                        <div class="col-1">
                                                                                                        <label for="" class="pl-3" style = "color:#98999a; ">de </label> 
                                                                                                        </div>
                                                                                                        <div class="col-8">
                                                                                                                <input type="text" class="form-control form-control-sm  " id="OtroapellidoPropietario_modificar" name="OtroapellidoPropietario_modificar" placeholder="Introduzca, solo el apellido">                                                                               
                                                                                                         </div>
                                                                                                    </div>
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                     
                                                                                                          <div class="col-md-12">
                                                                                                                            <label for="ciPropietario_modificar" class="form-label p-0 m-0 font-italic mt-2">C.I.</label>
                                                                                                                                
                                                                                                                            <div class="row">
                                                                                                                                    <div class="col-6">
                                                                                                                                                    <input type="number" class="form-control form-control-sm " id="ciPropietario_modificar" name="ciPropietario_modificar" placeholder="Ingrese Nro. C.I.">
                                                                                                                                    </div>
                                                                                                                                    <div class="col-4">
                                                                                                                                                     <select class="form-control form-control-sm " id = "expPropietario_modificar" name = "expPropietario_modificar">
                                                                                                                                                            <option value = "SIN EXP.">SIN EXP.</option>
                                                                                                                                                            <option value = "LP" >LP</option>
                                                                                                                                                            <option value = "OR" >OR</option>
                                                                                                                                                            <option value = "CBBA" >CBBA</option>
                                                                                                                                                            <option value = "PT" >PT</option>
                                                                                                                                                            <option value = "SCZ" >SCZ</option>
                                                                                                                                                            <option value = "BN" >BN</option>
                                                                                                                                                            <option value = "PA" >PA</option>
                                                                                                                                                            <option value = "TJ" >TJ</option>
                                                                                                                                                            <option value = "CH" >CH</option>
                                                                                                                                                    </select>    
                                                                                                                                    </div>
                                                                                                                            </div>          
                                                                                                                                        
                                                                                                                                    
                                                                                                                                                
                                                                                                                                                
                                                                                                                                                                                                                                   
                                                                                                                              <div style = "display: flex; justify-content: center;" class = "mt-2">
                                                                                                                                    <label style = "color:#66869A; align: center" class="font-italic mt-2">Complemento C.I. (si corresponde):&nbsp;</label>
                                                                                                                                    <select class="form-control " style="width: 30%; align:center" name = "ciComplemento_modificar" id="ciComplemento_modificar"> 
                                                                                                                                         
                                                                                                                                    <option value = "Sin compl.">Sin compl.</option>

                                                                                                                                            <script>
                                                                                                                                                for (var i = 65; i <= 90; i++) {
                                                                                                                                                document.write("<option value = '-"+String.fromCharCode(i)+"' >-" + String.fromCharCode(i) + "</option>");
                                                                                                                                                }
                                                                                                                                            </script>
                                                                                                                                    </select> 
                                                                                                                             </div>                                                                                                                                           
                                                                                                         </div>
                                                                                                                                                                                                   
                                                                                        <div class="col-md-12">
                                                                                            <label for="celPropietario" class="form-label p-0 m-0 font-italic mt-2">Celular</label>
                                                                                            <input type="number" class="form-control form-control-sm" id="celPropietario_modificar" name="celPropietario_modificar" placeholder="Ingrese celular">
                                                                                            <span class="text-danger"></span>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <label for="emailPropietario" class="form-label p-0 m-0 font-italic mt-2">Correo electrónico (opcional) </label>
                                                                                            <input type="text" class="form-control form-control-sm  " id="emailPropietario_modificar" name="emailPropietario_modificar" placeholder="Ingrese correo electronico">
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





      
                        </div> 
                        
     <!-- Modal ver edificios -->
                        <div class="modal fade" id="modal-xl">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">

                            <form class="" id="formEdificio">                                                                                                                   

                                <div class="modal-header"   style = "background: rgb(60,141,188);background: linear-gradient(0deg, rgba(60,141,188,0.5970763305322129) 17%, rgba(60,141,188,1) 96%); ">
                                    <h4 class="modal-title font-italic" style = "color:#FFFFFF" >Registrar edificio</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body navbar navbar-light bg-light">
                                
                                        <div class="col-md-12 font-italic mt-2">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="" class="form-label p-0 m-0 font-italic " style = "">Nombre del edificio</label> 
                                                            <input type="text" class="form-control form-control-sm  " id="nombre_edificio" name="nombre_edificio" placeholder="Introduzca el nombre del edificio">                                                                               
                                                        </div>

                                                        <div class="col-4">
                                                                <label for="" class="form-label p-0 m-0 font-italic " style = "">Categoría: </label>                                                     
                                                                <select class="form-control " style="" name = "categoriaEdificio" id="categoriaEdificio"> 
                                                                           <option value = "">PATRIMONIO URBANO ARQUITECTÓNICO Y ARTÍSTICO MUSEOSY MANIFESTACIONES CULTURALES</option>
                                                                           <option value = "SIN CATEGORIA">SIN CATEGORIA</option>
                                                                </select>                                                                  
                                                        </div>

                                                        <div class="col-2">
                                                                <label for="tipoEdificio" class="form-label p-0 m-0 font-italic " style = "">Tipo: </label>                                                     
                                                                <select class="form-control " style="" name = "tipoEdificio" id="tipoEdificio"> 
                                                                           <option value = "LEGADO ARQUEOLÓGICO">LEGADO ARQUEOLÓGICO</option>
                                                                           <option value = "SIN TIPO">SIN TIPO</option>
                                                                </select>                                                                  
                                                        </div>
                                                        <div class="col-3">
                                                                <label for="subTipoEdificio" class="form-label p-0 m-0 font-italic " style = "">Sub tipo: </label>                                                     
                                                                <select class="form-control " style="" name = "subTipoEdificio" id="subTipoEdificio"> 
                                                                           <option value = "ARQUITECTURA Y ARTE">ARQUITECTURA Y ARTE</option>
                                                                           <option value = "SIN SUB TIPO">SIN SUB TIPO</option>
                                                                </select>                                                                  
                                                        </div>
                                                    </div>

                                                    <fieldset>
                                                        <legend class="form-label p-0 m-0 font-italic mt-2" >Ubicación</legend>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class = "row">
                                                                    <div class="col-4">
                                                                    <label for="coordenadasEdificio">Coordenadas UTM:</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                    <input type="text" class="form-control form-control-sm" id="coordenadasEdificioLatitud" name="coordenadasEdificioLonguitud" placeholder = "Latitud">
                                                                    </div>
                                                                    <div class="col-3">
                                                                    <input type="text" class="form-control form-control-sm" id="coordenadasEdificioLonguitud" name="coordenadasEdificioLonguitud"  placeholder = "Longuitud">
                                                                    </div>                                                                          
                                                                </div>
                                                                <div class = "row pt-2">
                                                                    <p id ="text_indicador" class = "text-sm pl-3">Buscar coord.: &nbsp;</p>
                                                                    <button type="button"  class="btn btn-block btn-outline-info btn-xs btn_abrir_maps" id = "id_btn_abrir_maps" >Abrir maps</button>
                                                                </div>
                                                    
                                                                                  
                                                            </div>

                                                            <div class = "col-6">
                                                                <label for="sitiosReferencia" class="form-label p-0 m-0 font-italic " style = "">Sitios de referencia:</label>                                                     
                                                                <textarea class="form-control" id= "sitiosReferencia" name= "sitiosReferencia" rows="2" placeholder="......."></textarea>                                                                            
                                                            </div>


                                                        </div>
                                                        <div id = "contenedor_mostrar_google_maps">
                                                            <fieldset id = "google_maps">
                                                            <legend class="form-label p-0 m-0 font-italic mt-2 title_google_maps" >Google maps</legend>
                                                            <button type="button" class="close"  aria-label="Close" id = "icon_cerrar_maps_google">
                                                            <span aria-hidden="true" id = "">&times;</span>
                                                            </button>
                                                                <div class = "row">
                                                                    <div class="col-3">
                                                                    <label for="coordenadasEdificio">Distrito:</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <select name="" id="distrito">
                                                                            <option >-</option> 
                                                                            <option >1</option>    
                                                                            <option >2</option>
                                                                            <option >3</option>
                                                                            <option >4</option>
                                                                            <option >5</option>
                                                                            <option >6</option>
                                                                            <option >7</option>
                                                                            <option >8</option>
                                                                            <option >9</option>
                                                                            <option >10</option>
                                                                            <option >11</option>
                                                                            <option >12</option>
                                                                            <option >13</option>
                                                                            <option >14</option>

                                                                        </select>               
                                                                    </div>
                                                                    <div class="col-3">
                                                                    <label for="lugarRefencia">Lugar de refefencia</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                    <input type="text" class="form-control form-control-sm" id="lugarRefencia" name="lugarRefencia"  placeholder = "Introduzca un lugar de referencia">
                                                                    </div>                                                                          
                                                                </div>                                             
                                                                <div id="map"></div>
                                                              
                                                            </fieldset>
                                                        </div>


                                                        <div class = "row pt-3">
                                                                <div class = "col-2">
                                                                    <label for="distritoPropiedad" class="form-label p-0 m-0 font-italic pl-2" style = "">Distrito:&nbsp;</label>                                                     
                                                                    <select class="" id="distritoPropiedad" name="distritoPropiedad">
                                                                        <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option  value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option>
                                                                        <option value='12'>12</option><option value='13'>13</option><option value='14'>14</option>
                                                                    </select>  
                                                               </div>
                                                               <div class = "col-1">
                                                                        <label for="direccionPropiedad" class="form-label p-0 m-0 font-italic " style = "">Direccion:</label>                                                     
                                                                </div>
                                                               <div class = "col-5">      
                                                                        <input type="text" class="form-control form-control" id="direccionPropiedad"  name="direccionPropiedad" placeholder = "Dirección">  
                                                               </div>
                                                               <div class = "col-4 pl-3"> 
                                                                        <label for="altitudPropiedad" class="form-label p-0 m-0 font-italic" style = "">Altitud m.s.n.m. :&nbsp;</label>                                                                          
                                                                        <input type="text" class="form-control form-control w-50" id="altitudPropiedad"  name = "altitudPropiedad" placeholder = "altitud" value = "4,150 m">  
                                                               </div>
                                                        </div>                                                                                       
                                                    </fieldset>

                                                    <div class = "pt-2" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Hospedaje</legend>
                                                                <div class = "row " style = "text-align: center;">
                                                                         <div class = "col-2"> 
                                                                            <input class="form-check-input" name = "hospedajeAlojamiento"  id = "hospedajeAlojamiento" type="checkbox">
                                                                            <label for = "hospedajeAlojamiento"  class="form-label p-0 m-0 font-italic">Alojamiento</label>
                                                                        </div>  
                                                                        <div class = "col-2">                                      
                                                                            <input class="form-check-input" name = "hospedajeHotel"  id = "hospedajeHotel" type="checkbox">
                                                                            <label for = "hospedajeHotel" class="form-label p-0 m-0 font-italic">Hotel</label>
                                                                         </div>
                                                                         <div class = "col-2"> 
                                                                            <input class="form-check-input" name = "hospedajePosada"  id = "hospedajePosada" type="checkbox">
                                                                            <label for = "hospedajePosada" class="form-label p-0 m-0 font-italic">Posada</label>
                                                                        </div>
                                                                         <div class = "col-2"> 
                                                                            <input class="form-check-input" name = "hospedajeResidencia"  id = "hospedajeResidencia" type="checkbox">
                                                                            <label for = "hospedajeResidencia" class="form-label p-0 m-0 font-italic">Residencia</label>
                                                                        </div> 
                                                                        <div class = "col-2"> 
                                                                            <input class="form-check-input" name = "alimentacionTiendas"  id = "alimentacionTiendas" type="checkbox">
                                                                            <label for = "alimentacionTiendas" class="form-label p-0 m-0 font-italic">Tiendas</label>
                                                                        </div> 
                                                                                                                                                      
                                                                </div>
                                                            </fieldset>
                                                    </div>
                                                
                                                    <div class = "pt-2" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Alimentación</legend>
                                                                <div class = "row " style = "text-align: center;">
                                                                         <div class = "col-2"> 
                                                                            <input class="form-check-input" name = ""  id = "alimentacionPension" type="checkbox">
                                                                            <label for = "alimentacionPension" class="form-label p-0 m-0 font-italic">Pension</label>
                                                                        </div>  
                                                                        <div class = "col-2">                                      
                                                                            <input class="form-check-input" name = "alimentacionCafeteria"  id = "alimentacionCafeteria" type="checkbox">
                                                                            <label for = "alimentacionCafeteria" class="form-label p-0 m-0 font-italic">Cafeteria</label>
                                                                         </div>
                                                                         <div class = "col-2"> 
                                                                            <input class="form-check-input" name = "alimentacionComedor"  id = "alimentacionComedor" type="checkbox">
                                                                            <label for = "alimentacionComedor" class="form-label p-0 m-0 font-italic">Comedor</label>
                                                                        </div>
                                                                         <div class = "col-2"> 
                                                                            <input class="form-check-input" name = "alimentacionRestaurante"  id = "alimentacionRestaurante" type="checkbox">
                                                                            <label for = "alimentacionRestaurante" class="form-label p-0 m-0 font-italic">Restaurante</label>
                                                                        </div> 
                                                                        <div class = "col-2"> 
                                                                            <input class="form-check-input" name = "hospedajeOtros"  id = "hospedajeOtros" type="checkbox">
                                                                            <label for = "hospedajeOtros" class="form-label p-0 m-0 font-italic">Tiendas</label>
                                                                        </div> 
                                                                                                                                                      
                                                                </div>
                                                            </fieldset>
                                                    </div>

                                                    <div class = "pt-2" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Accesibilidad</legend>
                                                                <div class = "row " >
                                                                    <div class="col-sm-3">
                                                                        <label for="accesibilidadPuntoPartida" class="form-label p-0 m-0 font-italic " style = "">Punto de partida</label> 
                                                                        <input type="text" class="form-control form-control-sm  " id="accesibilidadPuntoPartida" name="accesibilidadPuntoPartida" placeholder="Introduzca el lugar">                                                                               
                                                                    </div> 
                                                                    <div class="col-sm-3">
                                                                        <label for="accesibilidadPuntoLlegada" class="form-label p-0 m-0 font-italic " style = "">Punto de llegada</label> 
                                                                        <input type="text" class="form-control form-control-sm  " id="accesibilidadPuntoLlegada" name="accesibilidadPuntoLlegada" placeholder="Introduzca el lugar">                                                                               
                                                                    </div> 
                                                                    <div class="col-sm-3">
                                                                        <label for="accesibilidadTiempo" class="form-label p-0 m-0 font-italic " style = "">Tiempo(min)</label> 
                                                                        <input type="number" class="form-control form-control-sm  " id="accesibilidadTiempo" name="accesibilidadTiempo" placeholder="tiempo">                                                                               
                                                                    </div>  
                                                                    <div class="col-sm-3">
                                                                        <label for="accesibilidadCalidad" class="form-label p-0 m-0 font-italic " style = "">Calidad </label>                                                     
                                                                        <select class="form-control " style="" name = "accesibilidadCalidad" id="accesibilidadCalidad"> 
                                                                                <option value = "R">R</option>
                                                                                <option value = "B">B</option>
                                                                                <option value = "M">M</option>         
                                                                        </select>  
                                                                    </div>                                                                             
                                                                </div>
                                                                <div class = "row " >
                                                                    
                                                                    <div class="col-sm-3">
                                                                        <label for="accesibilidadDistancia" class="form-label p-0 m-0 font-italic " style = "">Distancia (km)</label> 
                                                                        <input type="number" class="form-control form-control-sm  " id="accesibilidadDistancia" name="accesibilidadDistancia" placeholder="distancia">                                                                               
                                                                    </div> 
                                                                     
                                                                    <div class="col-sm-9">
                                                                        <label for="accesibilidadObservaciones" class="form-label p-0 m-0 font-italic " style = "">Observaciones</label> 
                                                                        <textarea class="form-control" id= "accesibilidadObservaciones" name= "accesibilidadObservaciones" rows="2" placeholder="......."></textarea>                                                                            
                                                                    </div>                                                                            
                                                                </div>
                                                            </fieldset>
                                                    </div>
                                                    <div class = "pt-2" >
                                                        <div class = "row">                                                                                           
                                                                <div class = "col-sm-6">
                                                                    <fieldset>
                                                                        <legend class="form-label p-0 m-0 font-italic mt-2" >Transporte</legend>
                                                                        <div class = "row " style = "text-align: center;">
                                                                                <div class = "col-3"> 
                                                                                    <input class="form-check-input" name = "transporteMinibus"  id = "transporteMinibus" type="checkbox">
                                                                                    <label for = "transporteMinibus" class="form-label p-0 m-0 font-italic">Minibus</label>
                                                                                </div>  
                                                                                <div class = "col-3">                                      
                                                                                    <input class="form-check-input" name = "transporteBus"  id = "transporteBus" type="checkbox">
                                                                                    <label for = "transporteBus" class="form-label p-0 m-0 font-italic">Bus</label>
                                                                                </div>
                                                                                <div class = "col-3"> 
                                                                                    <input class="form-check-input" name = "transporteTaxi"  id = "transporteTaxi" type="checkbox">
                                                                                    <label for = "transporteTaxi" class="form-label p-0 m-0 font-italic">Taxi</label>
                                                                                </div>
                                                                                <div class = "col-3"> 
                                                                                    <input class="form-check-input" name = "transporteTeleferico"  id = "transporteTeleferico" type="checkbox">
                                                                                    <label for = "transporteTeleferico" class="form-label p-0 m-0 font-italic">Teleférico</label>
                                                                                </div>                                                                                                                                                     
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class = "col-sm-6"> 
                                                                    <fieldset>
                                                                            <legend class="form-label p-0 m-0 font-italic mt-2" >Servicios básicos</legend>
                                                                            <div class = "row " style = "text-align: center;">
                                                                                    <div class = "col-4"> 
                                                                                        <input class="form-check-input" name = "serviciosAgua"  id = "serviciosAgua" type="checkbox">
                                                                                        <label for = "serviciosAgua" class="form-label p-0 m-0 font-italic">Agua potable</label>
                                                                                    </div>  
                                                                                    <div class = "col-4">                                      
                                                                                        <input class="form-check-input" name = "serviciosAlcantarillado"  id = "serviciosAlcantarillado" type="checkbox">
                                                                                        <label for = "serviciosAlcantarillado" class="form-label p-0 m-0 font-italic">Alcantarillado</label>
                                                                                    </div>
                                                                                    <div class = "col-4"> 
                                                                                        <input class="form-check-input" name = "serviciosLuz"  id = "serviciosLuz" type="checkbox">
                                                                                        <label for = "serviciosLuz" class="form-label p-0 m-0 font-italic">Luz eléctrica</label>
                                                                                    </div>                                                                                                                                                                                
                                                                            </div>
                                                                    </fieldset> 
                                                                </div>                                                                             
                                                        </div>     
                                                    </div>                                              

                                                    <div class = "pt-2" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Datos climatológicos</legend>
                                                                <div class = "row " style = "text-align: center;">
                                                                         <div class = "col-4"> 
                                                                            <div class="row">
                                                                                    <div class = "col-4">                                                           
                                                                                    <label for = "climaTemperatura"  class="form-label p-0 m-0 font-italic">Temp. (°C)</label>
                                                                                    </div>
                                                                                    <div class = "col-3">
                                                                                    <input class="form-control" name = "climaTemperaturaInf"  id = "climaTemperaturaInf" type="number" value = "8">
                                                                                    </div>
                                                                                    <div class = "col-1">
                                                                                    <label for = "climaTemperatura"  class="form-label p-0 m-0 font-italic">a</label>
                                                                                    </div>
                                                                                    <div class = "col-3">
                                                                                    <input class="form-control" name = "climaTemperaturaSup"  id = "climaTemperaturaSup" type="number" value = "10">
                                                                                    </div>                                                                
                                                                            </div>
                                                                         </div>  
                                                                        <div class = "col-2">                                      
                                                                            <label for = "climaHumendad"  class="form-label p-0 m-0 font-italic">Humendad relat. (%)</label>
                                                                            <input class="form-control form-control" name = "climaHumendad"  id = "climaHumendad" type="number" value = "68">
                                                                         </div>
                                                                         <div class = "col-3"> 
                                                                            <label for = "climaHumendad"  class="form-label p-0 m-0 font-italic">Precipitación fluvial anual (mm)</label>
                                                                            <input class="form-control" name = "climaHumendad"  id = "climaHumendad" type="number" value = "600">

                                                                        </div>
                                                                         <div class = "col-3"> 
                                                                            <label for = "climaVientos"  class="form-label p-0 m-0 font-italic">Vientos predeterminados (km/h)</label>
                                                                            <input class="form-control" name = "climaVientos"  id = "climaVientos" type="number" value = "16">
                                                                        </div>                                                                                                                                                        
                                                                </div>
                                                            </fieldset>
                                                    </div>                                                                                               

                                                    <div class = "pt-2" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Datos poblacionales</legend>
                                                                <div class = "row " style = "text-align: center;">
                                                                      
                                                                                    <div class = "col-1">                                                           
                                                                                    <label for = "poblacionalesNroHab"  class="form-label p-0 m-0 font-italic">Nro. hab. </label>
                                                                                    </div>
                                                                                    <div class = "col-2">
                                                                                    <input class="form-control" name = "poblacionalesNroHab"  id = "poblacionalesNroHab" type="number" value = "1089100">
                                                                                    </div>
                                                                                    <div class = "col-2">
                                                                                        <label for = "grupoEtnico"  class="form-label p-0 m-0 font-italic">Grupo étnico</label>        
                                                                                        <select class="form-control " style="" name = "grupoEtnico" id="grupoEtnico"> 
                                                                                                <option value = "aymara">aymara</option>
                                                                                                <option value = "otro">otro</option>
                                                                                        </select>   
                                                                                    </div> 
                                                                                    <div class = "col-2">
                                                                                        <label for = "idiomas"  class="form-label p-0 m-0 font-italic">Idiomas</label>                               
                                                                                        <select class="form-control " style="" name = "grupoEtnico" id="grupoEtnico"> 
                                                                                                <option value = "español y aymara">español y aymara</option>
                                                                                                <option value = "otro">otro</option>
                                                                                        </select>   
                                                                                    </div> 
                                                                                    <div class = "col-5">
                                                                                        <label for = "ocupacionPrincipal"  class="form-label p-0 m-0 font-italic">Ocupacion principal</label>
        
                                                                                        <input class="form-control" name = "ocupacionPrincipal"  id = "ocupacionPrincipal" type="text" placeholder = "">  
                                                                                    </div>                                                                                                                                                                                                                                                      
                                                                </div>
                                                            </fieldset>
                                                    </div>                                                                                                  
                                                   
                                                    <div class = "pt-2" >
                                                        <div class = "row">
                                                            <div class = "col-sm-7  ">
                                                                    <fieldset>
                                                                        <legend class="form-label p-0 m-0 font-italic mt-2" >Servicios adicionales</legend>
                                                                        <div class = "row " style = "text-align: center;">
                                                                                <div class = "col-4"> 
                                                                                    <input class="form-check-input" name = "servicioCambioMoneda"  id = "servicioCambioMoneda" type="checkbox">
                                                                                    <label for = "servicioCambioMoneda"  class="form-label p-0 m-0 font-italic">Cambio de moneda</label>
                                                                                </div>
                                                                                <div class = "col-4"> 
                                                                                    <input class="form-check-input" name = "servicioGasolina"  id = "servicioGasolina" type="checkbox">
                                                                                    <label for = "servicioGasolina"  class="form-label p-0 m-0 font-italic">Estación de servicio y gasolina</label>
                                                                                </div> 
                                                                                <div class = "col-4"> 
                                                                                    <input class="form-check-input" name = "servicioAtencionMedica"  id = "servicioAtencionMedica" type="checkbox">
                                                                                    <label for = "servicioAtencionMedica"  class="form-label p-0 m-0 font-italic">Atención médica</label>
                                                                                </div>                                                                                                                                                                                                                                                                                                                                
                                                                        </div>
                                                                    </fieldset>                                                       
                                                            </div>
                                                            <div class = "col-sm-5">
                                                            <fieldset>
                                                                        <legend class="form-label p-0 m-0 font-italic mt-2" >Comunicación</legend>
                                                                        <div class = "row " style = "text-align: center;">
                                                                                <div class = "col-3"> 
                                                                                    <input class="form-check-input" name = "comunicacionFax"  id = "comunicacionFax" type="checkbox">
                                                                                    <label for = "comunicacionFax"  class="form-label p-0 m-0 font-italic">Fax</label>
                                                                                </div>
                                                                                <div class = "col-3"> 
                                                                                    <input class="form-check-input" name = "comunicacionRadio"  id = "comunicacionRadio" type="checkbox">
                                                                                    <label for = "comunicacionRadio"  class="form-label p-0 m-0 font-italic">Radio</label>
                                                                                </div> 
                                                                                <div class = "col-3"> 
                                                                                    <input class="form-check-input" name = "servicioTelefono"  id = "servicioTelefono" type="checkbox">
                                                                                    <label for = "servicioTelefono"  class="form-label p-0 m-0 font-italic">Telefono</label>
                                                                                </div> 
                                                                                <div class = "col-3"> 
                                                                                    <input class="form-check-input" name = "servicioCorreo"  id = "servicioCorreo" type="checkbox">
                                                                                    <label for = "servicioCorreo"  class="form-label p-0 m-0 font-italic">Correo</label>
                                                                                </div>                                                                                                                                                                                                                                                                                                                                
                                                                        </div>
                                                            </fieldset>                                        
                                                            </div>
                                                        </div>
                                                    </div> 
                                        
                                                    <div class = "pt-2" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Descripción</legend>
                                                                <div class = "row " style = "text-align: center;">
                                                                      
                                                                                    <div class = "col-1">                                                           
                                                                                    <label for = "descripcionEstadoActual"  class="form-label p-0 m-0 font-italic">Estado actual (%)</label>
                                                                                    </div>
                                                                                    <div class = "col-2">
                                                                                    <input class="form-control" name = "descripcionEstadoActual"  id = "descripcionEstadoActual" type="number" value = "90">
                                                                                    </div>                                                                                       
                                                                                    <div class = "col-3">
                                                                                        <label for = "descripcionTipoUso"  class="form-label p-0 m-0 font-italic">Tipo de uso</label>
                                                                                        <input class="form-control" name = "descripcionTipoUso"  id = "descripcionTipoUso" type="text" placeholder = "">  
                                                                                    </div> 
                                                                                    <div class = "col-6">
                                                                                        <label for = "descripcionRecurso"  class="form-label p-0 m-0 font-italic">Descripción del recurso</label>
                                                                                        <textarea class="form-control" id= "descripcionRecurso" name= "descripcionRecurso" rows="2" placeholder="Ingrece la descripción"></textarea>                                                                                     </div>                                                                                                                                                                                                                                                      
                                                                </div>
                                                            </fieldset>
                                                    </div>                                                                                           

                                        </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <button  class="btn btn-primary " type="submit" id="btnSubmitEdificio">Registrar</button>
                                </div>
                            </form>       
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                       
<!-- Modal Registrar edificios -->
  
                        

                        
    </div>
</div>


