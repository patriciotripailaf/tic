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
	<div class="row">
		<div class="card-box">
			<div>
				<h1>Información de los Usuarios</h1>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="card-box">
				<table class="table table-striped table-bordered dt-responsive nowrap">
					<thead>
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
					</thead>
					<tbody>
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
								echo anchor('jugadorController/banJugador/'.$dataJugadores[$i]['idJugador'], 'banear');
								echo '/';
								echo anchor('jugadorController/activarJugador/'.$dataJugadores[$i]['idJugador'], 'desbanear');
								echo '</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>