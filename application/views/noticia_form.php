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
<h1>Complete el formulario para agregar la noticia</h1><br>
<?php	
		echo form_open('noticiasController/nuevaNoticia')."<br>";
		echo form_label('Titulo:', 'titulo')."<br>";
		echo form_input('titulo')."<br>";
		echo form_label('Contenido:', 'contenido')."<br>";
		echo form_textarea('contenido')."<br>";
		echo "<br>";
		echo form_submit('enviar', 'Crear');
		echo form_close();

?>


</body>
</html>