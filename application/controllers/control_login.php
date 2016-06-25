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
		
		if($this->session->userdata('administrador') != FALSE){
			if($data['administrador']==1){
				$this->load->view('admin_view',$data);
			}else{
				$this->load->view('normal_view',$data);
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
					'administrador' => $resultadoAdmin['administrador']);
			}else{
				$data = array(
					'status' => $resultado['status'],
					'usuario' => $resultado['usuario'],
					'administrador' => 0);
			}
				   
			$this->session->set_userdata($data);
			
			if($data['administrador']== 1){
				$this->load->view('admin_view',$data);
			}
			else{
				if($data['status']== "baneado"){
					$this->load->view('ban_view',$data);
				}else
					{
					$this->load->view('normal_view',$data);
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
	}
}
?>