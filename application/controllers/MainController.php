<?php
class MainController extends CI_Controller{
	
	 public function __construct()
       {
        parent::__construct();
        $this->load->helper('url');
		//$this->load->database();
		//$this->load->scaffolding('usuarios');
	}
	function index(){
		$data = null;
		$this->load->view('menu');
		$this->load->view('home',$data);
		$this->load->view('menu_abajo');
	}
}
?>