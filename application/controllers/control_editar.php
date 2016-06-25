<?php
class control_editar extends CI_Controller{
	
	public function __construct()
       {
        parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
	}
	
	function editar(){
		$this->load->view('editar_usuario');
	}
	
	// function nuevo_registro(){
	// 	$user = $_POST['username'];
	// 	$pass = $_POST['password'];
	// 	$name = $_POST['nombre'];
	// 	$surn = $_POST['apellido'];
		
	// 	$this->load->model('registrar');
	// 	$resultado = $this->registrar->ingresar($user,$pass,$name,$surn);
		
	// 	$this->load->view('registro_exitoso_view');
	// }
	
	// function producto(){
	// 	$this->load->view('producto_view');
	// }
	
	// function nuevo_producto(){
	// 	$nombre = $_POST['nombre'];
	// 	$precio = $_POST['precio'];
	// 	$desc = $_POST['descripcion'];
	// 	$stock = $_POST['stock'];
	// 	$data = $this->session->all_userdata();
	// 	$this->load->model('registrar');
		
	// 	$phpdate = time();
 //    	$fecha = date( 'Y-m-d H:i:s', $phpdate );
		
	// 	$resultado = $this->registrar->agregar($nombre,$precio,$desc,$stock,$data['idusuarios']);
		
	// 	$this->load->view('producto_exitoso_view');
		
	// }
}
?>