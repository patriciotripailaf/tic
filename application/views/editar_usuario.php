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
	echo form_open('registro/nuevo_registro')."\n"; 
	
	echo form_label('Cambiar Imagen:', 'nada')."<br>"."\n";
	
	echo form_label('Editar Correo:', 'correo')."\n";
	echo form_input('correo')."<br>";
	
	echo form_label('Editar Contraseña:', 'pass')."\n";
	echo form_password('password')."<br>";

	echo form_submit('enviar', 'Editar');
	echo form_close();
	echo anchor('control_login/index', 'Volver a Login')."<br>";
?>
</body>
</html>