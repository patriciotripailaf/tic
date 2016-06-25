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
		echo form_input('tipo')."<br>";
		echo form_label('Posicion:', 'posicion')."<br>";
		echo form_input('posicion')."<br>";
		echo form_label('Administrador:', 'administrador')."<br>";
		echo form_input('administrador')."<br>";
		echo form_label('Cuotas Pagadas:', 'cuotas_pagadas')."<br>";
		echo form_input('cuotas_pagadas')."<br>";
		echo form_label('Jugador:', 'jugador_idjugador')."<br>";
		echo form_input('jugador_idjugador')."<br>";
		echo "<br>";
		echo form_submit('enviar', 'Crear');
		echo form_close();
	} else {
		echo form_open('sociosController/editarSocio/'.$dataSocio['idsocio'])."<br>";
		echo form_label('Tipo:', 'tipo')."<br>";
		echo form_input(['name' => 'tipo', 'value' => $dataSocio['tipo']])."<br>";
		echo form_label('Posicion:', 'posicion')."<br>";
		echo form_input(['name' => 'posicion', 'value' => $dataSocio['posicion']])."<br>";
		echo form_label('Administrador:', 'administrador')."<br>";
		echo form_input(['name' => 'administrador', 'value' => $dataSocio['administrador']])."<br>";
		echo form_label('Cuotas Pagadas:', 'cuotas_pagadas')."<br>";
		echo form_input(['name' => 'cuotas_pagadas', 'value' => $dataSocio['cuotas_pagadas']])."<br>";
		echo form_label('Jugador:', 'jugador_idjugador')."<br>";
		echo form_input(['name' => 'jugador_idjugador', 'value' => $dataSocio['jugador_idjugador']])."<br>";
		echo "<br>";
		echo form_submit('enviar', 'Modificar');
		echo form_close();
	}
?>
</body>
</html>