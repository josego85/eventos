<html>
<head>
    <title>Marcar Evento</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.datetimepicker.css" />
   
    <!-- Versión compilada y comprimida del CSS de Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" media="screen">
    
    <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
    <script src="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.datetimepicker.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/Utilitarios.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/Mapa.js" type="text/javascript" charset="utf-8"></script>
    <!--  
    <script src="<?php echo base_url(); ?>js/Iniciar.js" type="text/javascript" charset="utf-8"></script>
    -->
    <!-- Librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" charset="utf-8">
        // Iniciar.
        var v_accion = 'marcar';

        window.onload = localizame(v_accion);
    </script>
</head>
<body>
    <div class="container cabecera">
        <h1>Marcar Evento</h1>
        <form role="form" action="eventos/agregarEvento" method='post'>
            <div class="form-group">
                <label>Nombre
                    <span>*</span>
                </label>
                <input class="form-control" type="text" placeholder="Ingresa aqui el nombre del evento" name="evento_nombre" value="" id="evento_nombre" size="25" />
            </div>
            <div class="form-group">
                <label>Lugar
                    <span>*</span>
                </label>

                <input class="form-control" type="text" placeholder="Ingresa aqui el lugar del evento" name="evento_lugar" value="" id="evento_lugar" size="25" />
            </div>
            <div class="form-group">
                 <label>Fecha inicio
                 </label>
                 <input class="form-control" type="text" name="evento_fecha_inicio" value="" id="evento_fecha_inicio" />
            </div>
            <div class="form-group">
               <label>Fecha fin
               </label>
               <input class="form-control" type="text" name="evento_fecha_fin" value="" id="evento_fecha_fin"/>
            </div>
            <div class="form-group">
                <label>Latitud
                    <span>*</span>
                </label>
                <input class="form-control" type="text" name="evento_latitud" id="evento_latitud" value="" placeholder="click en el Mapa"/>
            </div>
            <div class="form-group">
                <label>Longitud
                    <span>*</span>
                </label>
                <input class="form-control" type="text" name="evento_longitud" id="evento_longitud" value="" placeholder="click en el Mapa"/>
            </div>
            <input class="btn btn-default" type="submit" name="submit" value="Enviar" />
       </form>
    </div>
    
    <div>
        <div>
            <div>
                <div>
                    
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







    
    <div class="container">
        <form role="form" >
            <div class="form-group">
                <input  class="form-control" type="text" placeholder="Ingresa aqui tu busqueda" name="direccion" value="" id="direccion" size="25" />
            </div>
            <button class="btn btn-default" type="button" onclick="direccion_buscador();">Buscador</button>
            <div id="resultado"/>
        </form>
    </div>
    <div id="mapa">
    </div>
</body>
</html>