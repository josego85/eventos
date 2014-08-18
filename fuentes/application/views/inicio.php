<html>
<head>
    <title>Eventos</title>
    
    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera')?>
</head>
<body>
    <div class="container cabecera">
        <h1>Eventos</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php $this->load->view('comunes/menu')?>
    </div>
    <div class="container">
        <!-- Mensaje descatacado -->
        <div class="jumbotron">
            <div class="container">
                <p>
                    Encuentra los diferentes eventos en tu ciudad.
                </p>
            </div>
        </div>
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

            <button class="btn btn-primary" type="button" onclick="filtrar();">Filtrar</button>
            <br>
            <br>
        </div>
        <div id="mapa">
        </div>
    </div
    <!-- Pie de pagina -->
    <?php $this->load->view('comunes/pie_pagina')?>
</body>
</html>