<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eventos extends CI_Controller {

	/**
	 * 
	 * @author josego
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('eventos_m', 'eventos');
	}
	
	/**
	 *
	 */
	public function index(){
	}	
	
	/**
	 *
	 */
	public function filtrarEventos(){
		$p_fecha_desde = $this->input->get('date_timepicker_desde', true);
		$p_fecha_hasta = $this->input->get('date_timepicker_hasta', true);
	
		// Normalizar fecha de inicio y fecha de fin.
		//$v_date_desde_formato_nuevo = date("Y-m-d H:i", strtotime($p_fecha_desde));
		$v_date_desde_formato_nuevo = date("Y-m-d", strtotime($p_fecha_desde));
		//$v_date_hasta_formato_nuevo = date("Y-m-d H:i", strtotime($p_fecha_hasta));
		$v_date_hasta_formato_nuevo = date("Y-m-d", strtotime($p_fecha_hasta));
	
		$r = $this->eventos->filtrarEventos($v_date_desde_formato_nuevo, $v_date_hasta_formato_nuevo);
	
		//echo "last query: " . $this->db->last_query();
	
		$v_geojson = $this->listar_eventos($r);
		header("Content-Type:application/json", true);
		echo json_encode($v_geojson);
	}
	
	/**
	 *
	 */
	public function listarEventos(){
		$r = $this->eventos->listarEventos();
		$v_geojson = $this->listar_eventos($r);
		header("Content-Type:application/json", true);
		echo json_encode($v_geojson);
	}
	
	public function listarEventos_jsonp(){
		$p_fecha_actual = $this->input->get('fecha_actual', true);
	
		//echo "p_fecha_actual: " . $p_fecha_actual;
		$r = $this->eventos->listarEventosApartirFecha($p_fecha_actual);
	
		//echo "last query: " . $this->db->last_query();
	
		$v_geojson = $this->listar_eventos($r);
		if(isset($_GET['callback'])){
			header("Content-Type: application/json");
			echo $_GET['callback']."(".json_encode($v_geojson).")";
		}
	}
	
	
	/*
	 * Metodos Privados.
	*/
	private function listar_eventos($p_r){
		// Marcadores en formato GeoJSON.
		$v_geojson = array(
			'type' => 'FeatureCollection',
			'features' => array()
		);
	
		if($p_r->num_rows() > 0){
			$v_eventos = $p_r->result();
	
			foreach($v_eventos as $p_evento) {
				// Se obtiene el date de inicio.
				$v_date_inicio = new DateTime($p_evento->evento_fecha_inicio);
				$v_fecha_inicio = $v_date_inicio->format('d-m-Y');
				$v_hora_inicio = $v_date_inicio->format('H:i');
	
				if($v_hora_inicio == '00:00'){
					$v_date_inicio = $v_fecha_inicio;
				}else{
					$v_date_inicio = $v_fecha_inicio . " " . $v_hora_inicio;
				}
	
				// Se obtiene el date de fin.
				$v_date_fin = new DateTime($p_evento->evento_fecha_fin);
				$v_fecha_fin = $v_date_fin->format('d-m-Y');
				$v_hora_fin = $v_date_fin->format('H:i');
	
				if($v_hora_fin == '00:00'){
					$v_date_fin = $v_fecha_fin;
				}else{
					$v_date_fin = $v_fecha_fin . " " . $v_hora_fin;
				}
	
				$v_evento = array(
					'type' => 'Feature',
					'geometry' => array(
					    'type' => 'Point',
						'coordinates' => array($p_evento->evento_longitud, $p_evento->evento_latitud)
					),
					'properties' => array(
					    'nombre' => $p_evento->evento_nombre,
						'lugar' =>	$p_evento->evento_lugar,
						'fecha_inicio' => $v_date_inicio,
						'fecha_fin' => $v_date_fin,
						'link' => $p_evento->evento_link
					)
				);
				array_push($v_geojson['features'], $v_evento);
			};
		}
		return $v_geojson;
	}
	
	/**
	 *
	 */
	public function agregarEvento(){
		$p_evento_nombre = $this->input->post('evento_nombre', true);
		$p_evento_lugar = $this->input->post('evento_lugar', true);
		$p_evento_fecha_inicio = $this->input->post('evento_fecha_inicio', true);
		$p_evento_fecha_fin = $this->input->post('evento_fecha_fin', true);
		$p_evento_latitud = $this->input->post('evento_latitud', true);
		$p_evento_longitud = $this->input->post('evento_longitud', true);
		
		$v_datos = array(
			'evento_nombre' => $p_evento_nombre,
			'evento_lugar' => $p_evento_lugar,
			'evento_fecha_inicio' => $p_evento_fecha_inicio,
			'evento_fecha_fin' => $p_evento_fecha_fin,
			'evento_latitud' => $p_evento_latitud,
			'evento_longitud' => $p_evento_longitud,
		);
		
		if($this->eventos->insertarEvento($v_datos)){
			echo "Inserto Correctamente";
		}else{
			 echo "NO inserto Correctamente";
		}
	}
}
/* End of file eventos.php */