<html>
<head>
    <title>Eventos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.datetimepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/leaflet/Plugins/MarkerCluster.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/leaflet/Plugins/MarkerCluster.Default.css" />
    
    <!-- Versión compilada y comprimida del CSS de Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" media="screen">
    
    <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
    <script src="<?php echo base_url(); ?>js/libs/leaflet/Plugins/leaflet.markercluster.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.datetimepicker.js" type="text/javascript" charset="utf-8"></script> 
    <script src="<?php echo base_url(); ?>js/Constantes.js" type="text/javascript" charset="utf-8"></script>
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

    <!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" charset="utf-8">
        // Iniciar.
        var v_accion = 'listar';

        window.onload = localizame(v_accion);
    </script>
</head>
<body>
    <div class="container cabecera">
        <h1>Eventos</h1>
    </div>
    <script type="text/javascript">
        // Obtener fecha actual.
 	    var v_fecha_actual_string = obtenerFechaActual("d-m-Y");
    
        jQuery(function(){
    	    jQuery('#date_timepicker_desde').datetimepicker({
    	        //format: 'd-m-Y H:i',
    	        format: 'd-m-Y',
    	        lang: 'es',
    	        onShow: function(ct){
    	            this.setOptions({
    	                maxDate: jQuery('#date_timepicker_hasta').val()?jQuery('#date_timepicker_hasta').val():false
    	            })
    	        },
    	        timepicker: false
    	        //value: v_fecha_actual_string,
    	        //format: 'd-m-Y H:i'
    	    });
    	    jQuery('#date_timepicker_hasta').datetimepicker({
    	    	//format: 'd-m-Y H:i',
    	    	format: 'd-m-Y',
    	        lang: 'es',
    	        onShow: function(ct){
    	            this.setOptions({
    	                minDate: jQuery('#date_timepicker_desde').val()?jQuery('#date_timepicker_desde').val():false
    	            })
    	        },
    	        timepicker: false
    	        //value: v_fecha_actual_string,
    	        //format: 'd-m-Y H:i'
    	    });
    	});
    </script>
    <div class="container">
        <p><strong>Filtro por fecha:</strong></p>
        <div id="buscador">
            <div class="form-group">
                Desde 
                <input class="form-control" id = "date_timepicker_desde" name = "date_timepicker_desde" type = "text" value = "" />  
            </div>
            <p>
            <div class="form-group">
                Hasta 
                <input class="form-control" id = "date_timepicker_hasta" name = "date_timepicker_hasta" type = "text" value = "" /> 
            </div>    
                 
            <button class="btn btn-default" type="button" onclick="filtrar();">Filtrar</button>
        </div>
        <div id="mapa">
        </div>
    </div
    <!-- Pie de pagina -->
    <?php $this->load->view('comunes/pie_pagina')?>
</body>
</html>
