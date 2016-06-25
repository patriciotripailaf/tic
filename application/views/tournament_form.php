<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Formulario para crear torneo</title>
	
</head>
<body>
<h1>Complete el formulario con la información del torneo</h1><br>
<?php	
		
	if(empty($dataTorneo)){
		echo form_open('tournamentController/nuevoTorneo')."<br>";
		echo form_label('Nombre:', 'nombre')."<br>";
		echo form_input('nombre')."<br>";
		echo form_label('Fecha:', 'fecha')."<br>";
		echo form_input(['name' => 'fecha', 'type' => 'date'])."<br>";
		echo form_label('Dirección:', 'direccion')."<br>";
		echo form_input('direccion')."<br>";
		echo form_label('Ganador:', 'ganador')."<br>";
		echo form_input('ganador')."<br>";
		echo "<br>";
		echo form_submit('enviar', 'Crear');
		echo form_close();
	} else {
		echo form_open('tournamentController/editarTorneo/'.$dataTorneo['idTorneo'])."<br>";
		echo form_label('Nombre:', 'nombre')."<br>";
		echo form_input(['name' => 'nombre', 'value' => $dataTorneo['nombreTorneo']])."<br>";
		echo form_label('Fecha:', 'fecha')."<br>";
		echo form_input(['name' => 'fecha', 'type' => 'date', 'value' => $dataTorneo['fechaTorneo']])."<br>";
		echo form_label('Dirección:', 'direccion')."<br>";
		echo form_input(['name' => 'direccion', 'value' => $dataTorneo['direccion']])."<br>";
		echo form_label('Ganador:', 'ganador')."<br>";
		echo form_input(['name' => 'ganador', 'value' => $dataTorneo['ganador']])."<br>";
		echo "<br>";
		echo form_submit('enviar', 'Modificar');
		echo form_close();
	}
?>
</body>
</html>