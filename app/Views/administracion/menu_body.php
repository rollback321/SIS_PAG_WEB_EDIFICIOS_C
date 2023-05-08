


<script src="<?= base_url()?>/plug_administracion/menu_body.js"></script>
<script src="<?= base_url()?>/plug_administracion/modal_ver_edificios.js"></script>
<script src="<?= base_url()?>/plug_administracion/eventos_intefaz_usuario.js"></script>





<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content p-2">
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
                                                                                                                        <table  class="table  table-striped table-bordered mb-0  " id="tableInicio" style="width: 100%;">
                                                                                                                            <thead class="">
                                                                                                                                <tr>
                                                                                                                                    <th>Nro.</th>
                                                                                                                                    <th>Nombre</th>
                                                                                                                                    <th>Apellidos</th>
                                                                                                                                    <th>C.I.</th>
                                                                                                                                    <th>Celular</th>                                     
                                                                                                                                    <th>Fecha de registro</th>
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
                                                                                    <section class="content">
                                                                                        <div class="container-fluid">
                                                                                            <h4 class="text-center display-4">GooEdificios</h4>
                                                                                            <div class="row">
                                                                                                <div class="col-md-8 offset-md-2">
                                                                                                   
                                                                                                        <div class="input-group">
                                                                                                            <input type="search" class="form-control form-control-md" id = "id_input_buscar_edificios" placeholder="Introduzca el nombre del edificios o el C.I. del propietario">
                                                                                                            <div class="input-group-append">
                                                                                                                <button type="submit" class="btn btn-md btn-default" onclick = "buscar_edificio()" id = "id_btn_buscar_edificios">
                                                                                                                    <i class="fa fa-search"></i>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row pt-3"  id = "contenedor_edificios">
                                                                                                   
                                                                                                    <div class="col-12 col-sm-6 col-md-4  align-items-stretch  search_div1" id = "id1" >
                                                                                                        <div class="card bg-light d-flex flex-fill search_div2">
                                                                                                           Ronald
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                            
                                                                                                    <div class="col-12 col-sm-6 col-md-4   align-items-stretch flex-column search_div1"  id = "id2">
                                                                                                        <div class="card bg-light d-flex flex-fill search_div2">
                                                                                                           Roli
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                            
                                                                                                    <div class="col-12 col-sm-6 col-md-4  align-items-stretch flex-column search_div1" id = "id3">
                                                                                                        <div class="card bg-light d-flex flex-fill search_div2">
                                                                                                           Paola
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                           
                                                                                                    <div class="col-12 col-sm-6 col-md-4  align-items-stretch flex-column search_div1" id = "id4">
                                                                                                        <div class="card bg-light d-flex flex-fill search_div2">
                                                                                                           Gillermo
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                           
                                                                                            
                                                                                                    <div class="col-12 col-sm-6 col-md-4  align-items-stretch flex-column search_div1" id = "id5">
                                                                                                        <div class="card bg-light d-flex flex-fill search_div2">
                                                                                                           Pedro
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                             </div>                                              
                                                                                        </div>
                                                                                    </section>
                                                                                       
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
                                                                                                                                                                                               
                                                                                <div class="row ">
                                                                                    <div class = "col-sm-3">
                                                                                        <label for="inputEmail4 " class = "font-italic">Sexo:</label> 
                                                                                    </div>
                                                                                    <div class = "col-sm-4">
                                                                                        
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="radio" name="generoPropietario" id = "generoPropietarioMasculino"   checked>
                                                                                            <label class="form-check-label" for="generoPropietarioMasculino">
                                                                                                Masculino
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class = "col-sm-4">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="radio" name="generoPropietario"  id = "generoPropietarioFemenino">
                                                                                            <label class="form-check-label" for="generoPropietarioFemenino">
                                                                                                Femenimo
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                    <form class="row g-3" id="forPropietario">
                                                                                        <div class="col-md-12 font-italic mt-2">
                                                                                            <label for="nombrePropietario" class="form-label p-0 m-0" id="labelnombrePropietario">Nombre</label>
                                                                                            <input type="text" autocapitalize="characters" class="form-control form-control-sm  " id="nombrePropietario" name="nombrePropietario" placeholder="Ingrese nombre del propietario">
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
                                                                                        <div class="col-md-12 font-italic mt-2" id = "groupApellido_de_casada">
                                                                                            <label for="OtroapellidoPropietario" style = "color:#66869A; " class="form-label p-0 m-0">Apellido de casada (opcional)</label>
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
                                                                                                                                                document.write('<option >-1' + String.fromCharCode(i) + '</option>');
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
                                                        <h4 class="modal-title font-italic mt-2" id="modalRegistrarPropietarioLabel" style = "color:#FFFFFF">Modificar registro <br>Propietario o propietaria del edificio</h4>
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
                                                          
                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">

                                                                                                                                            

                                <div class="modal-header"   style = "background: rgb(60,141,188);background: linear-gradient(0deg, rgba(60,141,188,0.5970763305322129) 17%, rgba(60,141,188,1) 96%); ">
                                    <h4 class="modal-title font-italic" style = "color:#FFFFFF" >Edificio</h4>
                                    <button type="button" class="close" data-dismiss="modal" id = "icon_cerrar_modal_edificios" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body navbar navbar-light bg-light" id = "modal_edificio">
                                    
                                  <!-- body del modal registrar que contiene parametros para la tabla edificios   -->
                                   <div id = "modal_edificio_registrar" style = "width: 100%;">
                                                                                                                                           
                                             <section class="content" >
                                             <form class="" id="formEdificio"> 
                                                <div class="container p-3" >                                      
                                                    <div class="card" style = "width: 100%;">
                                                        <!-- card-header -->
                                                        
                                                        <div class="card-header">
                                                            <h3 class="card-title">Datos del edificio y ubicación</h3>

                                                            <div class="card-tools">
                                                                <button type="button" id = "btn_registrar_datos_edificio_table" class="btn btn-block btn-outline-primary btn-sm" data-card-widget="collapse" title="Collapse">
                                                                <i class="fas fa-minus"></i>
                                                                </button>                       
                                                            </div>
                                                        </div>
                                                        <!-- card-body -->
                                                        <div class="card-body" id = "id_card_body_edificio">
                                                                 <!-- Datos de tabla edificio-->                                                                                 
                                                                 <div class="row" >
                                                                    <div class="col-sm-3">
                                                                        <label for="nombre_edificio" class="form-label p-0 m-0 font-italic " style = "">Nombre del edificio</label> 
                                                                        <input type="text" class="form-control form-control-sm  " id="nombre_edificio" name="nombre_edificio" placeholder="Introduzca el nombre del edificio">                                                                               
                                                                        <input type="hidden" id = "id_propietario" name = "id_propietario">                                                                             
                                                                    </div>

                                                                    <div class="col-sm-4">
                                                                            <label for="" class="form-label p-0 m-0 font-italic " style = "">Categoría: </label>                                                     
                                                                            <select class="form-control " style="" name = "categoriaEdificio" id="categoriaEdificio"> 
                                                                                    <option value = "PATRIMONIO URBANO ARQUITECTÓNICO Y ARTÍSTICO MUSEOS Y MANIFESTACIONES CULTURALES">PATRIMONIO URBANO ARQUITECTÓNICO Y ARTÍSTICO MUSEOS Y MANIFESTACIONES CULTURALES</option>
                                                                                    <option value = "SIN CATEGORIA">SIN CATEGORIA</option>
                                                                            </select>                                                                  
                                                                    </div>

                                                                    <div class="col-sm-2">
                                                                            <label for="tipoEdificio" class="form-label p-0 m-0 font-italic " style = "">Tipo: </label>                                                     
                                                                            <select class="form-control " style="" name = "tipoEdificio" id="tipoEdificio"> 
                                                                                    <option value = "LEGADO ARQUEOLÓGICO">LEGADO ARQUEOLÓGICO</option>
                                                                                    <option value = "SIN TIPO">SIN TIPO</option>
                                                                            </select>                                                                  
                                                                    </div>
                                                                    <div class="col-sm-3">
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
                                                                        <div class="col-sm-6">
                                                                            <div class = "row">
                                                                                <div class="col-4">
                                                                                <label for="coordenadasEdificio">Coordenadas UTM:</label>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                <input type="text" class="form-control form-control-sm" id="coordenadasEdificioLatitud" name="coordenadasEdificioLatitud" placeholder = "Latitud">
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                <input type="text" class="form-control form-control-sm" id="coordenadasEdificioLonguitud" name="coordenadasEdificioLonguitud"  placeholder = "Longuitud">
                                                                                </div>                                                                          
                                                                            </div>
                                                                            <div class = "row pt-2">
                                                                                <p id ="text_indicador" class = "text-sm pl-3">Buscar coord.: &nbsp;</p>
                                                                                <button type="button"  class="btn btn-block btn-outline-info btn-xs btn_abrir_maps" id = "id_btn_abrir_maps" >Abrir maps</button>
                                                                            </div>
                                                                
                                                                                            
                                                                        </div>

                                                                        <div class = "col-sm-6">
                                                                            <label for="sitiosReferencia" class="form-label p-0 m-0 font-italic " style = "">Sitios de referencia:</label>                                                     
                                                                            <textarea class="form-control" id= "sitiosReferencia" name= "sitiosReferencia" rows="2" placeholder="......."></textarea>                                                                            
                                                                        </div>


                                                                    </div>
                                                                    <div id = "contenedor_mostrar_google_maps">
                                                                        <fieldset id = "google_maps">
                                                                        <legend class="form-label p-0 m-0 font-italic mt-2 title_google_maps" >Google maps</legend>

                                                                                <button type="button" class="close"  aria-label="Close" id = "icon_cerrar_maps_google">
                                                                                <span aria-hidden="true" id = "" style = "background-color:#008080">Cerrar google maps &times;</span>
                                                                                </button>

                                                                            <div class = "row pt-4">
                                                                                <div class="col-sm-3">
                                                                                <label for="coordenadasEdificio">Distrito:</label>
                                                                                </div>
                                                                                <div class="col-sm-3">
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
                                                                                <div class="col-sm-3">
                                                                                <label for="lugarRefencia">Lugar de referencia</label>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                <input type="text" class="form-control form-control-sm" id="lugarRefencia" name="lugarRefencia"  placeholder = "Introduzca un lugar de referencia">
                                                                                </div>                                                                          
                                                                            </div>  
                                                                            <div class="container-fluid">                                           
                                                                                <div id="map"></div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>


                                                                    <div class = "row pt-3">
                                                                            <div class = "col-sm-2">
                                                                                <label for="distritoPropiedad" class="form-label p-0 m-0 font-italic pl-2" style = "">Distrito:&nbsp;</label>                                                     
                                                                                <select class="" id="distritoPropiedad" name="distritoPropiedad">
                                                                                    <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option  value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option>
                                                                                    <option value='12'>12</option><option value='13'>13</option><option value='14'>14</option>
                                                                                </select>  
                                                                        </div>
                                                                        <div class = "col-sm-1">
                                                                                    <label for="direccionPropiedad" class="form-label p-0 m-0 font-italic " style = "">Direccion:</label>                                                     
                                                                            </div>
                                                                        <div class = "col-5">      
                                                                                    <input type="text" class="form-control form-control" id="direccionPropiedad"  name="direccionPropiedad" placeholder = "Dirección">  
                                                                        </div>
                                                                        <div class = "col-sm-4 pl-3"> 
                                                                                    <label for="altitudPropiedad" class="form-label p-0 m-0 font-italic" style = "">Altitud m.s.n.m. :&nbsp;</label>                                                                          
                                                                                    <input type="text" class="form-control form-control w-50" id="altitudPropiedad"  name = "altitudPropiedad" placeholder = "altitud" value = "4,150 m">  
                                                                        </div>
                                                                    </div>                                                                                       
                                                                </fieldset> 
                                                                
                                                                <!-- Descripción del edificio -->
                                                               <div class = "pt-2" >
                                                                    <fieldset>
                                                                        <legend class="form-label p-0 m-0 font-italic mt-2" >Descripción del edificio</legend>
                                                                        <div class = "row " style = "text-align: center;">
                                                                            
                                                                                            <div class = "col-sm-1">                                                           
                                                                                            <label for = "descripcionEstadoActual"  class="form-label p-0 m-0 font-italic">Estado actual (%)</label>
                                                                                            </div>
                                                                                            <div class = "col-sm-2">
                                                                                            <input class="form-control" name = "descripcionEstadoActual"  id = "descripcionEstadoActual" type="number" value = "90">
                                                                                            </div>                                                                                       
                                                                                            <div class = "col-sm-3">
                                                                                                <label for = "descripcionTipoUso"  class="form-label p-0 m-0 font-italic">Tipo de uso</label>
                                                                                                <input class="form-control" name = "descripcionTipoUso"  id = "descripcionTipoUso" type="text" placeholder = "">  
                                                                                            </div> 
                                                                                            <div class = "col-sm-6">
                                                                                                <label for = "descripcionRecurso"  class="form-label p-0 m-0 font-italic">Descripción del recurso</label>
                                                                                                <textarea class="form-control" id= "descripcionRecurso" name= "descripcionRecurso" rows="2" placeholder="Ingrece la descripción"></textarea>                                                                                     </div>                                                                                                                                                                                                                                                      
                                                                        </div>
                                                                        <div class = "row pt-3" style = "text-align: center;">                                                                                                                                                          
                                                                            <div class = "col-sm-6">
                                                                                <label for = "descripcionAprovechamientoActual"  class="form-label p-0 m-0 font-italic">Grado de aprovechamiento actual</label>
                                                                                <textarea class="form-control" id= "descripcionAprovechamientoActual" name= "descripcionAprovechamientoActual" rows="2" placeholder="Ingrece la descripción"></textarea>
                                                                            </div> 
                                                                            <div class = "col-sm-6">
                                                                                <label for = "descripcionExplotacionTuristica"  class="form-label p-0 m-0 font-italic">Posibilidades de explotación turística</label>
                                                                                <textarea class="form-control" id= "descripcionExplotacionTuristica" name= "descripcionExplotacionTuristica" rows="2" placeholder="Ingrece la descripción"></textarea>
                                                                            </div>                                                                                                                                                                                                                                                      
                                                                        </div>                                        
                                                                        <div class = "row pt-3" style = "text-align: center;">                                                                                                                                                          
                                                                            <div class = "col-sm-6">
                                                                                <label for = "descripcionAprovechamientoActual"  class="form-label p-0 m-0 font-italic">Intervenciones necesarias para su aprovechamiento turístico</label>
                                                                                <textarea class="form-control" id= "descripcionAprovechamientoActual" name= "descripcionAprovechamientoActual" rows="2" placeholder="Ingrece la descripción"></textarea>
                                                                            </div> 
                                                                            <div class = "col-sm-6">
                                                                                <label for = "descripcionRelaciónRecursos"  class="form-label p-0 m-0 font-italic">Relación con otros recursos</label>
                                                                                <textarea class="form-control" id= "descripcionRelaciónRecursos" name= "descripcionRelaciónRecursos" rows="2" placeholder="Ingrece la descripción"></textarea>
                                                                            </div>                                                                                                                                                                                                                                                      
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                        </div>
                                                        <div class="card-footer" id = "id_card_fooder_edificio" style = "text-align: right;">
                                                        <button  class="btn btn-primary " type="submit" id="btnSubmitEdificio">Registrar</button>
                                                        </div>
                                                         
                                                    </div>
                                                   
                                                   
                                                </div>
                                            </form>                                                                     
                                            </section>

                                           <!-- Contenido servicio hospedaje -->
                                            <section class="content" id = "contenido_servicio_hospedaje" >
                                              
                                                <div class="container p-3" >                                      
                                                    <div class="card" style = "width: 100%;">
                                                        <!-- card-header -->                                              
                                                        <div class="card-header">
                                                            <h3 class="card-title">Servicios de hospedaje</h3>

                                                            <div class="card-tools">
                                                                <button type="button" id = "btn_registrar_datos_edificio_table" class="btn btn-block btn-outline-primary btn-sm" data-card-widget="collapse" title="Collapse">
                                                                <i class="fas fa-minus"></i>
                                                                </button>                       
                                                            </div>
                                                        </div>
                                                        <!-- card-body -->
                                                        <div class="card-body" id = "id_card_body_edificio">
                                                                
                                                        <div class="card-body table-responsive p-0">
                                                            <table class="table table-striped table-valign-middle">
                                                            <thead>
                                                            <tr>
                                                                <th>Tipo</th>
                                                                <th>Calidad de servicio</th>
                                                                <th>Cantidad de habitaciones</th>
                                                                <th>Opción</th>                                  
                                                            </tr>
                                                            </thead>
                                                            <tbody id = "t_body_hospedaje">                                                                                                                                                                                 
                                                            </tbody>
                                                            </table>
                                                        </div>  
                                                              
                                                        </div>
                                                        <div class="card-footer" id = "id_card_fooder_edificio" style = "text-align: right;">
                                                            <form id = "form_hospedaje">
                                                                <input type="hidden" name = "hospedaje_id_edificio" id = "hospedaje_id_edificio"> 
                                                            <div class = "row">                                                              
                                                                  <div class="col-sm-3">
                                                                    <div class = "row">
                                                                        <div class="col-sm-2">
                                                                        <label for="hospedajeTipo" class="form-label p-0 m-0 font-italic " style = "">Tipo:</label> 
                                                                        </div> 
                                                                        <div class="col-sm-10">
                                                                        <input type="text" class="form-control form-control-sm  " id="hospedajeTipo" name="hospedajeTipo" placeholder = "Introduzca el tipo de servicio">                                                                               
                                                                        </div>                                                                        
                                                                    </div>
                                                                  </div> 
                                                                  <div class="col-sm-3">
                                                                    <div class = "row">
                                                                        <div class="col-sm-7">                                                                       
                                                                        <label for="" class="form-label p-0 m-0 font-italic " style = "">Calidad de servicio: </label>                                                     
                                                                        </div> 
                                                                        <div class="col-sm-5">
                                                                        <select class="form-control " style="" name = "hospedaje_calidad" id="hospedaje_calidad"> 
                                                                                <option value = "Buena">Buena</option>
                                                                                <option value = "Regular">Regular</option>
                                                                                <option value = "Mala">Mala</option>
                                                                        </select> 
                                                                        </div>
                                                                    </div>     
                                                                  </div>
                                                                  <div class="col-sm-5">
                                                                    <div class = "row">
                                                                        <div class="col-sm-6">
                                                                            <label for="hospedajehabitaciones" class="form-label p-0 m-0 font-italic " style = "">Cantidad de habitaciones:</label> 
                                                                        </div> 
                                                                        <div class="col-sm-6">  
                                                                            <input type="number" class="form-control form-control-sm  " id="hospedajehabitaciones" name="hospedajehabitaciones" placeholder="Dato opcional">                                                                                                                                                       
                                                                        </div>                                                                        
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-sm-1 pt-3">
                                                                    <button  class="btn btn-primary " type="submit" id="btnSubmitServicioEdificio">Registrar</button>
                                                                  </div>                                                                                                                                              
                                                            </div>
                                                            </form>
                                                        </div>
                                                         
                                                    </div>
                                                    <!-- /.card -->
                                                   
                                                </div>
                                                                                                              
                                            </section>

                                                       <!-- Hospedaje -->
                                                       <div class = "pt-2 containter-fluid" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Hospedaje</legend>
                                                                <div class = "row " style = "text-align: center;">
                                                                         <div class = "col-sm-2 "> 
                                                                            <input class="form-check-input" name = "hospedajeAlojamiento"  id = "hospedajeAlojamiento" type="checkbox">
                                                                            <label for = "hospedajeAlojamiento"  class="form-label p-0 m-0 font-italic">Alojamiento</label>
                                                                        </div>  
                                                                        <div class = "col-sm-2 ">                                      
                                                                            <input class="form-check-input" name = "hospedajeHotel"  id = "hospedajeHotel" type="checkbox">
                                                                            <label for = "hospedajeHotel" class="form-label p-0 m-0 font-italic">Hotel</label>
                                                                         </div>
                                                                         <div class = "col-sm-2 "> 
                                                                            <input class="form-check-input" name = "hospedajePosada"  id = "hospedajePosada" type="checkbox">
                                                                            <label for = "hospedajePosada" class="form-label p-0 m-0 font-italic">Posada</label>
                                                                        </div>
                                                                         <div class = "col-sm-2 "> 
                                                                            <input class="form-check-input" name = "hospedajeResidencia"  id = "hospedajeResidencia" type="checkbox">
                                                                            <label for = "hospedajeResidencia" class="form-label p-0 m-0 font-italic">Residencia</label>
                                                                        </div> 
                                                                        <div class = "col-sm-2 "> 
                                                                            <input class="form-check-input" name = "hospedajeOtros"  id = "hospedajeOtros" type="checkbox">
                                                                            <label for = "alimentacionTiendas" class="form-label p-0 m-0 font-italic">Otros</label>
                                                                        </div> 
                                                                                                                                                      
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                  

                                        <div class="col-md-12 font-italic mt-2">
                                        </div>

                                                                                                                                        

                                   </div>                                                                                                             
                                    
                                   <!-- body modal en caso de que no haya ningun edificio registrar para el propietario -->
                                   <div id = "modal_body_button_registrar" style = "width: 100%;">
                                                                                                                                                  
                                                 <h3 class = "text-center display-5">El propieatario no cuenta con edificios registrados</h5> 
                                             <div style = "display: flex; justify-content: center; align-items: center; " class = "pt-3">     
                                                 <button class="btn btn-primary" type="button" onclick = "btn_registrar_edificio()">Registrar edificio</button>                                                                                                      
                                            </div>                                                                                                    
                                    </div>
                                   
                                </div>


                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger" id = "btn_cerrar_modal_edificios" data-dismiss="modal">Cerrar</button>
                                </div>
                                 
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            
                        </div>
                       
<!-- Modal Registrar edificios -->
  
                        

                        
    </div>
</div>


