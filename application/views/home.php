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
<h1>Home page(futuro menu lateral?)</h1><br>
<?php	
		echo anchor('tournamentController/cargarTorneos','Cargar Torneos');
		echo "<br>";
		echo anchor('noticiasController/cargarNoticias','Cargar Noticias');
		echo "<br>";
		echo anchor('jugadorController/cargarJugadores','Cargar Jugadores');

?>
</body>
</html>