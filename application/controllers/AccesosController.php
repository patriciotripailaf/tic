<?php
class AccesosController extends CI_Controller{
	
	public function __construct()
       {
        parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
	}
	
	function index(){

		$this->load->view('acceso_negado');
		
	}
	
}
?>