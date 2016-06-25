<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Login</title>
</head>
<body>
	<h1>LOGIN</h1><hr>
	<?php
		echo form_open('control_login/chequea_login')."\n"; 
			echo form_label('Usuario: ', 'usuario')."\n";
			echo form_input('username')."\n";
			echo form_label('Contraseña: ', 'pass')."\n";
			echo form_password('password')."\n";
			echo form_submit('enviar', 'Login');
		echo form_close();

		echo "<br>";
		echo anchor('control_registro/registrar', 'Registrar');
	?>
</body>
</html>