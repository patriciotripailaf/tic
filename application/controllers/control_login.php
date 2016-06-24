<?php
class control_login extends CI_Controller{
	
	public function __construct()
       {
        parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
	}
	
	function index(){
		$data = $this->session->all_userdata();
		
	// 	if($this->session->userdata('tipo') != FALSE){
	// 		if($data['tipo']=='cliente'){
	// 			$this->load->view('login_cliente_view',$data);
	// 		}else if($data['tipo']=='proveedor'){
	// 			$this->load->view('login_proveedor_view',$data);
	// 		}
	// 	}else
		$this->load->view('login_usuario');
		
	// }
	
	// function chequea_login(){
	// 	$user = $_POST['username'];
	// 	$pass = $_POST['password'];
		
	// 	$this->load->model('ingreso');
	// 	$resultado = $this->ingreso->verificar($user,$pass);

	// 	if($resultado != null){
	// 		$data = array(
 //                   'nombre' => $resultado['nombre'],
 //                   'apellido' => $resultado['apellido'],
	// 			   'tipo' => $resultado['nombre_tipo'],
 //                   'logged_in' => TRUE,
	// 			   'idusuarios' => $resultado['idusuarios']);
				   
	// 		$this->session->set_userdata($data);
			
	// 		if($data['tipo']=='cliente')
	// 			$this->load->view('login_cliente_view',$data);
	// 		else if($data['tipo']=='proveedor')
	// 			$this->load->view('login_proveedor_view',$data);
	// 	}
	// 	else{
	// 		$data['usuario'] = $user;
	// 		$this->load->view('login_fallido_view',$data);
	// 	}
	// }
	
	// function salir(){
	// 	$this->session->sess_destroy();
	// 	$this->load->view('login_view');
	// }
}
?>