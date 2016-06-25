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
		$this->load->view('menu');
		$this->load->view('noticia_form',$data);
		$this->load->view('menu_abajo');
	}

	function getNoticia($id){
		$data = null;
		$this->load->model('info');
		$resultado = $this->info->get_noticia($id);
		if($resultado != null){
			$i=0;
			foreach ($resultado as $row) {
				$torneos[$i]['idNoticia'] = $id;
				$torneos[$i]['titular'] = $row->titular;
				$torneos[$i]['fecha'] = $row->fecha;
				$torneos[$i]['contenido'] = $row->contenido;
				$i++;
			}
		}
		$resultado2 = $this->info->getComentarios($id);
		if($resultado2 != null){
			$i=0;
			foreach ($resultado2 as $row) {
				$comentarios[$i]['fecha'] = $row->fecha_comentario;
				$comentarios[$i]['comentario'] = $row->comentario;
				$comentarios[$i]['usuario'] = $row->usuario;
				$i++;
			}
		}
		else {
			$comentarios=null;
		}
			$data['dataNoticias'] = $torneos;
			$data['comentario'] = $comentarios;
		$this->load->view('menu');
		$this->load->view('show_noticia',$data);
		$this->load->view('menu_abajo');
	}

	function nuevaNoticia(){
		$data = null;
		$titulo = $_POST['titulo'];
		$contenido = $_POST['contenido'];
		$this->load->model('info');
		$resultado = $this->info->crearNoticia($titulo, $contenido);
		cargarNoticias();
	}

	function nuevoComentario($idNoticia){
		$data = null;
		$comentario = $_POST['comentario'];
		$this->load->model('info');
		$resultado = $this->info->crearComentario($idNoticia,$comentario,42);
		cargarNoticias();
	}


}
?>