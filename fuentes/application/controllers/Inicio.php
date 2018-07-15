<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller{
	
	/**
	 *
	 * @author josego
	 */
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * 
	 */
	function index(){
	    $this->load->view("inicio");
	}
        
        /**
	 * 
	 */
        function marcar_evento(){
	    $this->load->view("marcar_evento");
	}
}