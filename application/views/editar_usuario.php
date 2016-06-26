<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Editar Datos</title>
</head>
<body>	
<h1>EDITAR DATOS</h1><hr>
<?php	
	echo form_open_multipart('control_editar/editarJugador/'.$dataJugador['idjugador'])."<br>"; 

	echo "<input id='foto-animal'    accept='image/*' name='foto' type='file' required> <br>";
	
	echo form_label('Editar Correo:', 'email')."<br>";
	echo form_input(['name' => 'email', 'type' => 'email', 'value' => $dataJugador['email']])."<br>";
	
	echo form_label('Editar Contraseña:', 'password')."<br>";
	echo form_password('password')."<br>"."<br>";
	echo form_submit('enviar', 'Editar');
	echo form_close();
	echo anchor('', 'Volver a Login')."<br>";
?>
</body>
</html>