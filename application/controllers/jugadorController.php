<?php
class jugadorController extends CI_Controller{
	
	 public function __construct()
       {
        parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		}

	function cargarJugadores(){
		$this->load->model('info');
		$resultado = $this->info->jugadores();
		if($resultado != null){
			$i=0;
			foreach ($resultado as $row) {
				$jugadores[$i]['idJugador'] = $row->idjugador;
				$jugadores[$i]['nombreJugador'] = $row->nombre_jugador;
				$jugadores[$i]['apellidoJugador'] = $row->apellido;
				$jugadores[$i]['rut'] = $row->rut;
				$jugadores[$i]['sexo'] = $row->sexo;
				$jugadores[$i]['nombreUsuario'] = $row->usuario;
				$jugadores[$i]['pass'] = $row->password;
				$jugadores[$i]['email'] = $row->email;
				$jugadores[$i]['fechaRegistro'] = $row->fecha_registro;
				$jugadores[$i]['ultimoIngreso'] = $row->ultimo_ingreso;
				$jugadores[$i]['estado'] = $row->status;
				$i++;
			}
			$data['dataJugadores'] = $jugadores;
			$this->load->view('menu');
			$this->load->view('jugador_info',$data);
			$this->load->view('menu_abajo');
		} else {
			$data['dataTorneos'] = '';
			$this->load->view('menu');
			$this->load->view('jugador_info',$data);
			$this->load->view('menu_abajo');
		}
	}

	function banJugador($idJugador){
		$data = null;
		$this->load->model('info');
		$this->info->banearJugador($idJugador);
		redirect('jugadorController/cargarJugadores', 'refresh');
	}
}
?>