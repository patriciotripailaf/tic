<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Login</title>
</head>
<body>
	<h1>LO SENTIMOS, USUARIO <?php echo $usuario." " ?>BANEADO!</h1><hr>
	<?php 
	echo anchor('control_login/salir', 'Salir')."<br>"; 
	?>

</body>
</html>