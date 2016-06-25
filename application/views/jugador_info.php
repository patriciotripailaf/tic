<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Usuarios</title>
</head>
<body>
	<div>
		<h1>Información de los Usuarios</h1>

		<div>
			<table>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Rut</th>
				<th>Sexo</th>
				<th>Nombre de Usuario</th>
				<th>Password</th>
				<th>email</th>
				<th>fecha de registro</th>
				<th>Ultimo ingreso</th>
				<th>Estado</th>
				<th>Banear</th>
				<?php
					for($i=0;$i<count($dataJugadores);$i++){
						echo '<tr>';
						echo '<td>'.$dataJugadores[$i]['idJugador'].'</td>';
						echo '<td>'.$dataJugadores[$i]['nombreJugador'].'</td>';
						echo '<td>'.$dataJugadores[$i]['apellidoJugador'].'</td>';
						echo '<td>'.$dataJugadores[$i]['rut'].'</td>';
						echo '<td>'.$dataJugadores[$i]['sexo'].'</td>';
						echo '<td>'.$dataJugadores[$i]['nombreUsuario'].'</td>';
						echo '<td>'.$dataJugadores[$i]['pass'].'</td>';
						echo '<td>'.$dataJugadores[$i]['email'].'</td>';
						echo '<td>'.$dataJugadores[$i]['fechaRegistro'].'</td>';
						echo '<td>'.$dataJugadores[$i]['ultimoIngreso'].'</td>';
						echo '<td>'.$dataJugadores[$i]['estado'].'</td>';
						echo '<td>';
						echo anchor('jugadorController/banearJugador/'.$dataJugadores[$i]['idJugador'], 'banear');
						echo '</td>';
						echo '</tr>';
					}
				?>
			</table>
		<?php	
		echo "<br>";
		//echo anchor('jugadorController/crearJugador', 'Crear Usuario');

		?>
		</div>
	</div>
</body>
</html>