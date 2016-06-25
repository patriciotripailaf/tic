<?php
	class info extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }

    function agregarJugador($nombre, $apellido, $rut, $sexo, $usuario, $password, $email, $fecha_registro, $ultimo_ingreso, $status){
        
        $sql = "INSERT INTO `jugador` (`idjugador`, `nombre_jugador`, `apellido_paterno`, `apellido_materno`,
                `rut`) VALUES (NULL, '".$nombre."', '".$apellido."', '".$rut."', '".$sexo."', '".$usuario."', 
                '".$password."', '".$email."', '".$fecha_registro."', '".$ultimo_ingreso."', '".$status."')";
        $qry = $this->db->query($sql);
    }

    function agregarJugadorTorneo($rut, $nombreTorneo){
        
        $sql = "INSERT INTO jugador_has_torneo (`jugador_idjugador`, `torneo_idtorneo`)
                SELECT idjugador,idtorneo FROM jugador INNER JOIN torneo
                WHERE rut='".$rut."' AND nombre_torneo='".$nombreTorneo."'";
        $qry = $this->db->query($sql);
    }
   	
    function actualizarJugador($nombre, $apellido, $rut){
        
        $sql = "UPDATE jugador SET nombre_jugador='".$nombre."', apellido='".$apellido."' WHERE rut=".$rut;
        $qry = $this->db->query($sql);
    }

    function noticias(){
        
        $sql = "SELECT * FROM `noticia`";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function get_noticia($id){
        
        $sql = "SELECT * FROM `noticia` WHERE `noticia`.`idnoticia` =".$id;
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function getComentarios($id){
        $sql = "SELECT fecha_comentario,comentario,nombre_jugador,apellido,usuario FROM `noticia` JOIN comentarios ON noticia_idnoticia = idnoticia JOIN jugador ON jugador_idjugador=idjugador WHERE `noticia`.`idnoticia` =".$id;
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function crearComentario($idnoticia,$comentario,$idjugador){
        
        $data = array(
            'jugador_idjugador' => $idjugador ,
            'noticia_idnoticia' => $idnoticia ,
            'comentario' => $comentario ,
            'fecha_comentario' => dateTime("Y-m-d H:i:s")
            );
        
        $this->db->insert('comentarios', $data);
    }

    function eliminarNoticia($idNoticia){
        
        $sql = "DELETE FROM `noticia` WHERE `noticia`.`idnoticia` = ".$idNoticia;
        $qry = $this->db->query($sql);
    }

    function numeroTorneosJugador($idJugador){
        
        $sql = "SELECT COUNT(*) FROM `jugador_has_torneo` WHERE jugador_idjugador=".$idJugador;
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function numeroSocios(){
        
        $sql = "SELECT COUNT(*) FROM `socio`";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function torneos(){
        
        $sql = "SELECT * FROM `torneo`";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function crearTorneo($nombre,$fecha,$direccion,$ganador){
        
        $data = array(
            'idTorneo' => null,
            'nombre_torneo' => $nombre ,
            'fecha_torneo' => $fecha ,
            'direccion' => $direccion ,
            'ganador' => $ganador);
        
        $this->db->insert('torneo', $data);
    }

    function get_torneo($id){
        
        $sql = "SELECT * FROM `torneo` WHERE `torneo`.`idtorneo` = ".$id;
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function actualizarTorneo($idTorneo, $nombre, $fecha, $direccion, $ganador){
        
        $sql = "UPDATE torneo SET nombre_torneo='".$nombre."', fecha_torneo='".$fecha."', direccion='".$direccion."', ganador='".$ganador."' WHERE idtorneo=".$idTorneo;
        $qry = $this->db->query($sql);
    }

    function eliminartorneo($idTorneo){
        
        $sql = "DELETE FROM `torneo` WHERE `torneo`.`idtorneo` = ".$idTorneo;
        $qry = $this->db->query($sql);
    }

    function crearNoticia($titulo,$contenido){
        
        $data = array(
            'titular' => $titulo,
            'fecha' => date("Y-m-d"),
            'autor_idsocio' => 42 );
        
        $this->db->insert('noticia', $data);
    }
    
    function userAdmin($usuario){
        
        $sql = "SELECT administrador FROM socio INNER JOIN jugador ON idjugador = jugador_idjugador where usuario = '".$usuario."'";
        $qry = $this->db->query($sql);
        $resultado = $qry->row_array();
        if($resultado!=null){
            return $resultado;
        }
        else{
            return null;
        }
    }

    function usuarioPass($usuario){
        
        $sql = "SELECT pass FROM jugador where usuario = '".$usuario."'";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function socios(){
        
        $sql = "SELECT * FROM `socio`";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function listaJugadoresSinSocio(){
        
        $sql = "SELECT nombre_jugador,apellido,idjugador FROM jugador LEFT JOIN socio ON jugador.idjugador=socio.jugador_idjugador WHERE idsocio IS NULL";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function listaJugadores(){
        
        $sql = "SELECT nombre_jugador,apellido,idjugador FROM jugador";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function crearSocio($tipo, $posicion, $administrador, $cuotas_pagadas, $jugador_idjugador){
        $date = date('Y-m-d');
        $data = array(
            'idsocio' => null,
            'fecha_inscripcion' => $date ,
            'tipo' => $tipo ,
            'posicion' => $posicion ,
            'administrador' => $administrador,
            'cuotas_pagadas' => $cuotas_pagadas ,
            'jugador_idjugador' => $jugador_idjugador);
        
        $this->db->insert('socio', $data);
    }

    function get_socio($id){
        
        $sql = "SELECT * FROM `socio` WHERE `socio`.`idsocio` = ".$id;
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function actualizarSocio($idSocio, $tipo, $posicion, $administrador, $cuotas_pagadas){
        
        $sql = "UPDATE socio SET tipo='".$tipo."', posicion='".$posicion."', administrador='".$administrador."', cuotas_pagadas='".$cuotas_pagadas."' WHERE idsocio=".$idSocio;
        $qry = $this->db->query($sql);
    }

    function eliminarSocio($idSocio){
        
        $sql = "DELETE FROM `socio` WHERE `socio`.`idsocio` = ".$idSocio;
        $qry = $this->db->query($sql);
    }

    function jugadores(){
        
        $sql = "SELECT * FROM `jugador`";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }

    function banearJugador($idJugador){
        
        $sql = "UPDATE jugador SET status='baneado' WHERE idjugador=".$idJugador;
        $qry = $this->db->query($sql);
    }

    function activarJugador($idJugador){
        
        $sql = "UPDATE jugador SET status='activo' WHERE idjugador=".$idJugador;
        $qry = $this->db->query($sql);
    }

    function userLogin($usuario,$password){
        
        $sql = "SELECT status,usuario,idjugador FROM jugador where usuario = '".$usuario."' AND password = '".$password."'";
        $qry = $this->db->query($sql);
        $resultado = $qry->row_array();
        if($resultado!=null){
            //actualizar ingreso 
        $sql2 = "UPDATE jugador SET ultimo_ingreso=".dateTime("Y-m-d H:i:s")."WHERE usuario=".$usuario;
        $qry2 = $this->db->query($sql2);
            return $resultado;
        }
        else{
            return null;
        }

    }

    function ingresar($user,$pass,$name,$surn,$rut,$sexo,$correo){
        
        $data = array(
            'usuario' => $user ,
            'password' => $pass ,
            'nombre_jugador' => $name ,
            'apellido' => $surn,
            'rut' => $rut,
            'sexo' => $sexo,
            'email' => $correo,
            'fecha_registro' => dateTime("Y-m-d H:i:s"),
            'ultimo_ingreso' => dateTime("Y-m-d H:i:s"),
            'status' => "activo");
        
        $this->db->insert('jugador', $data);
    }
}
?>