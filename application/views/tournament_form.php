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
		echo form_open('infoTorneo')."<br>";
		echo form_label('Nombre:', 'nombre')."<br>";
		echo form_input('nombre')."<br>";
		echo form_label('Fecha:', 'fecha')."<br>";
		echo '<input type="date" name="fecha" /> <br>';
		echo form_label('Dirección:', 'direccion')."<br>";
		echo form_input('dirección')."<br>";
		echo form_label('Ganador:', 'ganador')."<br>";
		echo form_input('ganador')."<br>";
		echo "<br>";
		echo form_submit('enviar', 'crear');
		echo form_close();

?>
</body>
</html>