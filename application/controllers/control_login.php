<?php
class control_login extends CI_Controller{
	
	public function __construct()
       {
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('permisos');

	}
	
	function index(){
		$data = $this->session->all_userdata();
		
		if($this->session->userdata('administrador') != FALSE){
			if($data['administrador']==1){
				$this->load->view('menu');
				$this->load->view('admin_view',$data);
				$this->load->view('menu_abajo');
			}else{
				$this->load->view('menu');
				$this->load->view('normal_view',$data);
				$this->load->view('menu_abajo');
			}
		}else{
		$this->load->view('login_usuario');
		}
	}
	
	function chequea_login(){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		$this->load->model('info');
		$resultado = $this->info->userLogin($user,$pass);
		$resultadoAdmin = $this->info->userAdmin($user);

		if($resultado != null){
			if($resultadoAdmin != null){
				
				$data = array(
					'status' => $resultado['status'],
					'usuario' => $resultado['usuario'],
					'logeado' => 1,
					'id' => $resultado['idjugador'],
					'administrador' => $resultadoAdmin['administrador']);
			}else{
				$data = array(
					'status' => $resultado['status'],
					'usuario' => $resultado['usuario'],
					'logeado' => 1,
					'id' => $resultado['idjugador'],
					'administrador' => 0);
			}
				   
			$this->session->set_userdata($data);
			$_SESSION["id"] = $resultado['idjugador'];
			$_SESSION["usuario"] = $resultado['usuario'];
			if($data['administrador']== 1){
				
				$this->load->view('menu');
				$this->load->view('admin_view',$data);
				$this->load->view('menu_abajo');
			}
			else{
				if($data['status']== "baneado"){
					$this->load->view('ban_view',$data);
				}else
					{
					
					$this->load->view('menu');
					$this->load->view('normal_view',$data);
					$this->load->view('menu_abajo');
				}
			}
		}
		else{
			$data['usuario'] = $user;
			$this->load->view('login_fallido',$data);
		}
	}
	
	function salir(){
		$this->session->sess_destroy();
		$this->load->view('login_usuario');
		redirect('', 'refresh');
	}
}
?>