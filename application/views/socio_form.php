<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Formulario para crear socio</title>
	
</head>
<body>
<h1>Complete el formulario con la información del socio</h1><br>
<?php	
		
	if(empty($dataSocio)){
		echo form_open('sociosController/nuevoSocio')."<br>";
		echo form_label('Tipo:', 'tipo')."<br>";
		echo '<select name = "tipo">';
		echo '<option value = "honorario">Honorario</option>';
		echo '<option value = "normal">Normal</option>';
		echo '</select><br>';
		echo form_label('Posicion:', 'posicion')."<br>";
		echo form_input(['name' => 'posicion', 'type' => 'number'])."<br>";
		echo form_label('Administrador:', 'administrador')."<br>";
		echo '<select name = "administrador">';
		echo '<option value = "1">Sí</option>';
		echo '<option value = "0">No</option>';
		echo '</select><br>';
		echo form_label('Cuotas Pagadas:', 'cuotas_pagadas')."<br>";
		echo form_input(['name' => 'cuotas_pagadas', 'type' => 'number'])."<br>";
		echo form_label('Jugador:', 'jugador_idjugador')."<br>";
		echo '<select name = "jugador_idjugador">';
		echo '<option value = "">Ninguno</option>';
		for($i=0;$i<count($listaJugadores);$i++){
			echo '<option value = "'.$listaJugadores[$i]['idjugador'].'">'.$listaJugadores[$i]['nombre_jugador'].' '.$listaJugadores[$i]['apellido'].'</option>';
		}
		echo '</select><br>';
		echo "<br>";
		echo form_submit('enviar', 'Crear');
		echo form_close();
	} else {
		echo form_open('sociosController/editarSocio/'.$dataSocio['idsocio'])."<br>";
		echo form_label('Tipo:', 'tipo')."<br>";
		echo '<select name = "tipo">';
		echo '<option value = "honorario">Honorario</option>';
		echo '<option value = "normal">Normal</option>';
		echo '</select><br>';
		echo form_label('Posicion:', 'posicion')."<br>";
		echo form_input(['name' => 'posicion', 'type' => 'number', 'value' => $dataSocio['posicion']])."<br>";
		echo form_label('Administrador:', 'administrador')."<br>";
		echo '<select name = "administrador">';
		echo '<option value = "1">Sí</option>';
		echo '<option value = "0">No</option>';
		echo '</select><br>';
		echo form_label('Cuotas Pagadas:', 'cuotas_pagadas')."<br>";
		echo form_input(['name' => 'cuotas_pagadas', 'type' => 'number', 'value' => $dataSocio['cuotas_pagadas']])."<br>";
		echo form_label('Jugador:', 'jugador_idjugador')."<br>";
		echo '<select name = "jugador_idjugador">';
		echo '<option value = "">Ninguno</option>';
		for($i=0;$i<count($listaJugadores);$i++){
			echo '<option value = "'.$listaJugadores[$i]['idjugador'].'">'.$listaJugadores[$i]['nombre_jugador'].' '.$listaJugadores[$i]['apellido'].'</option>';
		}
		echo '</select><br>';
		echo "<br>";
		echo form_submit('enviar', 'Modificar');
		echo form_close();
	}
?>
</body>
</html>