<?php
class tournamentController extends CI_Controller{
	
	 public function __construct()
       {
        parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		}

	function cargarTorneos(){
		$this->load->model('info');
		$resultado = $this->info->torneos();
		if($resultado != null){
			$i=0;
			foreach ($resultado as $row) {
				$torneos[$i]['idTorneo'] = $row->idtorneo;
				$torneos[$i]['nombreTorneo'] = $row->nombre_torneo;
				$torneos[$i]['fechaTorneo'] = $row->fecha_torneo;
				$torneos[$i]['direccion'] = $row->direccion;
				$torneos[$i]['ganador'] = $row->ganador;
				$i++;
			}
			$data['dataTorneos'] = $torneos;
			$this->load->view('menu');
			$this->load->view('tournament_info',$data);
			$this->load->view('menu_abajo');
		} else {
			$data['dataTorneos'] = '';
			$this->load->view('tournament_info',$data);
		}
	}

	function crearTorneo(){
		$data = null;
		$this->load->view('tournament_form',$data);
	}

	function nuevoTorneo(){
		$data = null;
		$nombre = $_POST['nombre'];
		$fecha = $_POST['fecha'];
		$direccion = $_POST['direccion'];
		$ganador = $_POST['ganador'];
		$this->load->model('info');
		$resultado = $this->info->crearTorneo($nombre, $fecha, $direccion, $ganador);
		$this->load->view('tournament_created',$data);
	}


}
?>