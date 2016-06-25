<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>VISTA NORMAL Bienvenido: </h1><?php echo $usuario ?><hr>
	<?php 
	echo anchor('control_login/salir', 'Salir')."<br>"; 
	echo anchor('control_editar/editar', 'Editar Datos');
	?>

</body>
</html>