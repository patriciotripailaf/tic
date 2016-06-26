<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Login</title>
</head>
<body>
	<h1>VISTA ADMINISTRADOR</h1>Bienvenido: <?php echo $usuario ?><hr>
	<?php 
	echo anchor('control_login/salir', 'Salir')."<br>";
	echo anchor('control_editar/editarJugadorForm/'.$_SESSION['id'], 'Editar Datos'); 
	?>

</body>
</html>