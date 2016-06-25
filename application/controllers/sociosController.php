<?php
class sociosController extends CI_Controller{
	
	 public function __construct()
       {
        parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		}

	function cargarSocios(){
		$this->load->model('info');
		$resultado = $this->info->socios();
		if($resultado != null){
			$i=0;
			foreach ($resultado as $row) {
				$socios[$i]['idSocio'] = $row->idsocio;
				$socios[$i]['fecha_inscripcion'] = $row->fecha_inscripcion;
				$socios[$i]['tipo'] = $row->tipo;
				$socios[$i]['posicion'] = $row->posicion;
				$socios[$i]['administrador'] = $row->administrador;
				$socios[$i]['cuotas_pagadas'] = $row->cuotas_pagadas;
				$socios[$i]['jugador_idjugador'] = $row->jugador_idjugador;
				$i++;
			}
			$data['dataSocios'] = $socios;
			$this->load->view('menu');
			$this->load->view('socio_info',$data);
			$this->load->view('menu_abajo');
		} else {
			$data['dataSocios'] = '';
			$this->load->view('menu');
			$this->load->view('socio_info',$data);
			$this->load->view('menu_abajo');
		}
	}

	function crearSocio(){
		$data = null;
		$this->load->view('menu');
		$this->load->view('socio_form',$data);
		$this->load->view('menu_abajo');
	}

	function nuevoSocio(){
		$data = null;
		$tipo = $_POST['tipo'];
		$posicion = $_POST['posicion'];
		$administrador = $_POST['administrador'];
		$cuotas_pagadas = $_POST['cuotas_pagadas'];
		$jugador_idjugador = $_POST['jugador_idjugador'];
		$this->load->model('info');
		$resultado = $this->info->crearSocio($tipo, $posicion, $administrador, $cuotas_pagadas, $jugador_idjugador);
		redirect('sociosController/cargarSocios', 'refresh');
	}

	function editarSocioForm($idSocio){
		$this->load->model('info');
		$resultado = $this->info->get_socio($idSocio);
		if($resultado != null){
			foreach ($resultado as $row) {
				$socio['idsocio'] = $idSocio;
				$socio['tipo'] = $row->tipo;
				$socio['posicion'] = $row->posicion;
				$socio['administrador'] = $row->administrador;
				$socio['cuotas_pagadas'] = $row->cuotas_pagadas;
				$socio['jugador_idjugador'] = $row->jugador_idjugador;
			}
			$data['dataSocio'] = $socio;
			$this->load->view('menu');
			$this->load->view('socio_form',$data);
			$this->load->view('menu_abajo');
		}
	}
	function editarSocio($idSocio){
		$data = null;
		$tipo = $_POST['tipo'];
		$posicion = $_POST['posicion'];
		$administrador = $_POST['administrador'];
		$cuotas_pagadas = $_POST['cuotas_pagadas'];
		$this->load->model('info');
		$this->info->actualizarSocio($idSocio, $tipo, $posicion, $administrador, $cuotas_pagadas);
		redirect('sociosController/cargarSocios', 'refresh');
	}

	function borrarSocio($idSocio){
		$data = null;
		$this->load->model('info');
		$this->info->eliminarSocio($idSocio);
		redirect('sociosController/cargarSocios', 'refresh');
	}

}
?>