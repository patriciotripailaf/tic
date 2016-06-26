<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Registro</title>
	</head>
	<body>
	<h1>REGISTRO</h1><hr>
	<?php	

		echo form_open_multipart('control_registro/nuevo_registro')."\n"; 
		
		echo form_label('Nombre:', 'nombre')."<br>";
		echo form_input('nombre')."<br>";
		
		echo form_label('Apellido:', 'apellido')."<br>";
		echo form_input('apellido')."<br>";

		echo form_label('Rut:', 'rut')."<br>";
		echo form_input('rut')."<br>";

		$options = array(
        'hombre' => 'Hombre',
        'mujer' => 'Mujer'
		);
		echo form_label('Sexo:', 'sexo')."<br>";
		echo form_dropdown('sexo', $options)."<br>"."<br>";
		?>
		<input id='foto-animal'    accept="image/*" name='foto' type='file' required> <br>.<br>
		<?php	
		echo form_label('Correo:', 'correo')."<br>";
		echo form_input('correo')."<br>";

		echo form_label('Usuario:', 'usuario')."<br>";
		echo form_input('username')."<br>";
		
		echo form_label('Contraseña:', 'pass')."<br>";
		echo form_password('password')."<br>"."<br>";
		
	
		echo form_submit('enviar', 'Registrar');
		echo form_close()."<br>";
		echo anchor('control_login/index', 'Volver') 
	?>

</body>
</html>