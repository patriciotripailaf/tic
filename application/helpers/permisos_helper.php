<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	
	function permiso($nivel){
		if(!isset($_SESSION["logeado"])){

				redirect('AccesosController/index');
		}

		if($nivel == 1){
			if($_SESSION["administrador"] < 1){
				redirect('AccesosController/index');
			}
		}

	}

	


?>