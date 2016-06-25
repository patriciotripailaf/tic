<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function getAvatarPath($avatarFilename){
		return base_url().'img/avatar/'.$avatarFilename;
	}
	
	function getCoverPath($coverFilename){
		return base_url().'img/news_cover/'.$coverFilename;
	}
	
	function getEventImagePath($filename){
		return base_url().'img/event/'.$filename;
	}
	
	function prepareHTMLFromText($str){
		return str_replace('\r\n','<br>',$str);
	}
	
	function checkPermission($permissionNeeded){
		if(!isset($_SESSION["logeado"])){
			//Si necesito permisos y no estoy loggeado
			if($permissionNeeded>0){
				redirect('main_controller/access_denied/1');
			}
		}
		//si estoy loggeado
		else{
			//si es requisito no estar loggeado
			if($permissionNeeded < 0){
				//acceso denegado
				redirect('main_controller/access_denied/-1');
			}
			if($permissionNeeded > 0){
				//si estoy banneado
				if($_SESSION["permission"]==2){ //&& $permissionNeeded!= 2
					//redirigir a página de banneados
					redirect('main_controller/access_denied/2');
				}
			}
			//si necesito permisos de administrador pero no lo soy
			if($permissionNeeded==3 && $_SESSION["permission"]<3){
				//acceso denegado
				redirect('main_controller/access_denied/3');
			}
		}
	}

	


?>