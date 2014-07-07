<html>
<head>
    <title>Eventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/JQuery/datetimepicker-master/jquery.datetimepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/leaflet/Plugins/MarkerCluster.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/libs/leaflet/Plugins/MarkerCluster.Default.css" />
    
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
    <script type="text/javascript" charset="utf-8">
        // Iniciar.
        var v_accion = 'listar';

        window.onload = localizame(v_accion);
    </script>
</head>
<body>
    <div class="cabecera">
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
    <p><strong>Filtro por fecha:</strong></p>
    <div id="buscador">
        <p>
            Desde <input id = "date_timepicker_desde" name = "date_timepicker_desde" type = "text" value = "" />  
            Hasta <input id = "date_timepicker_hasta" name = "date_timepicker_hasta" type = "text" value = "" />
            <button type="button" onclick="filtrar();">Filtrar</button>
        </p>
    </div>
    <div id="mapa">
    </div>
    <!-- Pie de pagina -->
    <?php $this->load->view('comunes/pie_pagina')?>
</body>
</html>
