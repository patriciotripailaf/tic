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

    function eliminarNoticia($idNoticia){
        
        $sql = "DELETE FROM `noticia` WHERE `noticia`.`idnoticia` = ".$idNoticia;
        $qry = $this->db->query($sql);
    }

    function eliminarSocio($idSocio){
        
        $sql = "DELETE FROM `socio` WHERE `socio`.`idsocio` = ".$idSocio;
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
    
    function userAdmin($usuario){
        
        $sql = "SELECT administrador FROM socio INNER JOIN jugador ON idjugador = jugador_idjugador where usuario = '".$usuario."'";
        $qry = $this->db->query($sql);
        if($qry->num_rows() > 0){
            return $qry->result();
        }
        else{
            return null;
        }
    }
}
?>