<html>
<head>
    <title>Marcar Evento</title>
    
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.datetimepicker.css" />
    
    <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
    <script src="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.datetimepicker.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/Utilitarios.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/Mapa.js" type="text/javascript" charset="utf-8"></script>
    <!--  
    <script src="<?php echo base_url(); ?>js/Iniciar.js" type="text/javascript" charset="utf-8"></script>
    -->
    <script type="text/javascript" charset="utf-8">
        // Iniciar.
        var v_accion = 'marcar';

        window.onload = localizame(v_accion);
    </script>
</head>
<body>
    <div class="cabecera">
        <h1>Marcar Evento</h1>
    </div>
    
    <div>
        <div>
            <div>
                <div>
                    <form  action="eventos/agregarEvento" method='post'>
                        <div>
	                        <div>
	                            <div>
	                                <label>Nombre
	                                    <span>*</span>
	                                </label>
	                                <input type="text" placeholder="Ingresa aqui el nombre del evento" name="evento_nombre" value="" id="evento_nombre" size="25" />
	                            </div>
	                        </div>
	                    </div>
	                    <div>
	                        <div>
	                            <div>
	                                <label>Lugar
	                                    <span>*</span>
	                                </label>
	                                <label></label>
	                                <input type="text" placeholder="Ingresa aqui el lugar del evento" name="evento_lugar" value="" id="evento_lugar" size="25" />
	                            </div>
	                        </div>
	                    </div>
                        <div>
                            <div>
                                 <div>
                                     <label>Fecha inicio
                                     </label>
                                     <input type="text" name="evento_fecha_inicio" value="" id="evento_fecha_inicio" />
                                 </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                 <div>
                                     <label>Fecha fin
                                     </label>
                                     <input type="text" name="evento_fecha_fin" value="" id="evento_fecha_fin"/>
                                 </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div>
                                    <label>Latitud
                                        <span>*</span>
                                    </label>
                                    <input type="text" name="evento_latitud" id="evento_latitud" value="" placeholder="click en el Mapa"/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div>
                                    <label>Longitud
                                        <span>*</span>
                                    </label>
                                    <input type="text" name="evento_longitud" id="evento_longitud" value="" placeholder="click en el Mapa"/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="submit" name="submit" value="Enviar" />
                            </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>

        <!-- Element: Map -->
        <div class='col col-50'>
          <div id='map'></div>
          <div class='left'>
            <a id='geojsonLayer' href='#'></a>
          </div>
        </div>
      </div>
    </div>







    
    <div>
        <div>
            <form>
                <input type="text" placeholder="Ingresa aqui tu busqueda" name="direccion" value="" id="direccion" size="25" />
                <button type="button" onclick="direccion_buscador();">Buscador</button>
                <div id="resultado"/>
            </form>
        </div>
    </div>
    <div id="mapa">
    </div>
</body>
</html>