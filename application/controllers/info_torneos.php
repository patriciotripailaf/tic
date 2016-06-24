<?php
class info_torneos extends CI_Controller{
	
	 public function __construct()
       {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
		//$this->load->database();
		//$this->load->scaffolding('usuarios');
	}
	function index(){
		$data = null;
		$this->load->view('tournament_info',$data);
	}
	function crear_torneo(){
		$data = null;
		$this->load->view('tournament_form',$data);
	}
}
?>