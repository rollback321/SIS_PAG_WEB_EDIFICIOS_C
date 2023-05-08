
                                         <input type="hidden" id = "id_propietario" name = "id_propietario"> 
                                        <div class="col-md-12 font-italic mt-2">
                                                 <!-- <div class = "form-group">                                                                                                     -->
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="" class="form-label p-0 m-0 font-italic " style = "">Nombre del edificio</label> 
                                                            <input type="text" class="form-control form-control-sm  " id="nombre_edificio" name="nombre_edificio" placeholder="Introduzca el nombre del edificio">                                                                               
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
                                                      <!-- </div> -->
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
                                                
                                                    <div class = "pt-2" >
                                                            <fieldset>
                                                                <legend class="form-label p-0 m-0 font-italic mt-2" >Alimentación</legend>
                                                                <div class = "row " style = "text-align: center;">
                                                                         <div class = "col-sm-2"> 
                                                                            <input class="form-check-input" name = "alimentacionPension"  id = "alimentacionPension" type="checkbox">
                                                                            <label for = "alimentacionPension" class="form-label p-0 m-0 font-italic">Pension</label>
                                                                        </div>  
                                                                        <div class = "col-sm-2">                                      
                                                                            <input class="form-check-input" name = "alimentacionCafeteria"  id = "alimentacionCafeteria" type="checkbox">
                                                                            <label for = "alimentacionCafeteria" class="form-label p-0 m-0 font-italic">Cafeteria</label>
                                                                         </div>
                                                                         <div class = "col-sm-2"> 
                                                                            <input class="form-check-input" name = "alimentacionComedor"  id = "alimentacionComedor" type="checkbox">
                                                                            <label for = "alimentacionComedor" class="form-label p-0 m-0 font-italic">Comedor</label>
                                                                        </div>
                                                                         <div class = "col-sm-2"> 
                                                                            <input class="form-check-input" name = "alimentacionRestaurante"  id = "alimentacionRestaurante" type="checkbox">
                                                                            <label for = "alimentacionRestaurante" class="form-label p-0 m-0 font-italic">Restaurante</label>
                                                                        </div> 
                                                                        <div class = "col-sm-2"> 
                                                                            <input class="form-check-input" name = "alimentacionTiendas"  id = "alimentacionTiendas" type="checkbox">
                                                                            <label for = "alimentacionTiendas" class="form-label p-0 m-0 font-italic">Tiendas</label>
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
                                                                         <div class = "col-sm-4"> 
                                                                            <div class="row">
                                                                                    <div class = "col-4">                                                           
                                                                                    <label for = "climaTemperatura"  class="form-label p-0 m-0 font-italic">Temp. (°C)</label>
                                                                                    </div>
                                                                                    <div class = "col-sm-3">
                                                                                    <input class="form-control" name = "climaTemperaturaInf"  id = "climaTemperaturaInf" type="number" value = "8">
                                                                                    </div>
                                                                                    <div class = "col-1">
                                                                                    <label for = "climaTemperatura"  class="form-label p-0 m-0 font-italic">a</label>
                                                                                    </div>
                                                                                    <div class = "col-sm-3">
                                                                                    <input class="form-control" name = "climaTemperaturaSup"  id = "climaTemperaturaSup" type="number" value = "10">
                                                                                    </div>                                                                
                                                                            </div>
                                                                         </div>  
                                                                        <div class = "col-sm-2">                                      
                                                                            <label for = "climaHumendad"  class="form-label p-0 m-0 font-italic">Humendad relat. (%)</label>
                                                                            <input class="form-control form-control" name = "climaHumendad"  id = "climaHumendad" type="number" value = "68">
                                                                         </div>
                                                                         <div class = "col-sm-3"> 
                                                                            <label for = "climaPrecipitaciónFluvial"  class="form-label p-0 m-0 font-italic">Precipitación fluvial anual (mm)</label>
                                                                            <input class="form-control" name = "climaPrecipitaciónFluvial"  id = "climaPrecipitaciónFluvial" type="number" value = "600">

                                                                        </div>
                                                                         <div class = "col-sm-3"> 
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
                                                                      
                                                                                    <div class = "col-sm-1">                                                           
                                                                                    <label for = "poblacionalesNroHab"  class="form-label p-0 m-0 font-italic">Nro. hab. </label>
                                                                                    </div>
                                                                                    <div class = "col-sm-2">
                                                                                    <input class="form-control" name = "poblacionalesNroHab"  id = "poblacionalesNroHab" type="number" value = "1089100">
                                                                                    </div>
                                                                                    <div class = "col-sm-2">
                                                                                        <label for = "grupoEtnico"  class="form-label p-0 m-0 font-italic">Grupo étnico</label>        
                                                                                        <select class="form-control " style="" name = "grupoEtnico" id="grupoEtnico"> 
                                                                                                <option value = "aymara">aymara</option>
                                                                                                <option value = "otro">otro</option>
                                                                                        </select>   
                                                                                    </div> 
                                                                                    <div class = "col-sm-2">
                                                                                        <label for = "idiomas"  class="form-label p-0 m-0 font-italic">Idiomas</label>                               
                                                                                        <select class="form-control " style="" name = "grupoEtnico" id="grupoEtnico"> 
                                                                                                <option value = "español y aymara">español y aymara</option>
                                                                                                <option value = "otro">otro</option>
                                                                                        </select>   
                                                                                    </div> 
                                                                                    <div class = "col-sm-5">
                                                                                        <label for = "ocupacionPrincipal"  class="form-label p-0 m-0 font-italic">Ocupacion principal</label>
        
                                                                                        <input class="form-control" name = "ocupacionPrincipal"  id = "ocupacionPrincipal" type="text" placeholder = "">  
                                                                                    </div>                                                                                                                                                                                                                                                      
                                                                </div>
                                                                  <!-- DIRECT CHAT -->
                                                                    <div class="card direct-chat direct-chat-primary bg-lightblue ">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title form-label p-0 m-0 font-italic">Ocupacion principal</h3>

                                                                        <div class="card-tools">
                                                                        <span title="3 New Messages" class="badge badge-primary">3</span>
                                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                            <i class="fas fa-minus"></i>
                                                                        </button>                                                                 
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.card-header -->
                                                                    <div class="card-body">
                                                                    </div> 
                                                                    <div class="card-footer">
                                                                        <form >
                                                                        <div class="input-group">
                                                                            <input type="text" name="message" placeholder="Introduzca la ocupación" class="form-control">
                                                                            <span class="input-group-append">
                                                                            <button type="button" class="btn btn-primary">Registrar</button>
                                                                            </span>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                    <!-- /.card-footer-->
                                                                    </div>
                                                                    <!--/.direct-chat -->
                                                            </fieldset>
                                                    </div>                                                                                                  
                                                   
                                                    <div class = "pt-2" >
                                                        <div class = "row">
                                                            <div class = "col-sm-7  ">
                                                                    <fieldset>
                                                                        <legend class="form-label p-0 m-0 font-italic mt-2" >Servicios adicionales</legend>
                                                                        <div class = "row " style = "text-align: center;">
                                                                                <div class = "col-sm-4"> 
                                                                                    <input class="form-check-input" name = "servicioCambioMoneda"  id = "servicioCambioMoneda" type="checkbox">
                                                                                    <label for = "servicioCambioMoneda"  class="form-label p-0 m-0 font-italic">Cambio de moneda</label>
                                                                                </div>
                                                                                <div class = "col-sm-4"> 
                                                                                    <input class="form-check-input" name = "servicioGasolina"  id = "servicioGasolina" type="checkbox">
                                                                                    <label for = "servicioGasolina"  class="form-label p-0 m-0 font-italic">Estación de servicio y gasolina</label>
                                                                                </div> 
                                                                                <div class = "col-sm-4"> 
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

                              