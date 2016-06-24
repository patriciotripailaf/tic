<?php
class noticiasController extends CI_Controller{
	
	 public function __construct()
       {
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->helper('form');
		}

	function cargarNoticias(){
		$this->load->model('info');
		$this->load->view('menu');
		$resultado = $this->info->noticias();
		if($resultado != null){
			$i=0;
			foreach ($resultado as $row) {
				$torneos[$i]['idnoticias'] = $row->idnoticia;
				$torneos[$i]['titular'] = $row->titular;
				$torneos[$i]['fecha'] = $row->fecha;
				$torneos[$i]['autor'] = $row->autor_idsocio;
				$i++;
			}
			$data['dataNoticias'] = $torneos;
			$this->load->view('Noticias',$data);
		} else {
			$data['dataNoticias'] = '';
			$this->load->view('tournament_info',$data);
		}
		$this->load->view('menu_abajo');
	}

	function crearNoticia(){
		$data = null;
		$this->load->view('noticia_form',$data);
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