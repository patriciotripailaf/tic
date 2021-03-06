<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Socios</title>
</head>
<body>
	<div class="row">
		<div class="card-box">
			<div>
				<h1>Información de los Socios</h1>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="card-box">
				<table class="table table-striped table-bordered dt-responsive nowrap">
					<thead>
						<th>idSocio</th>
						<th>fecha de Inscripción</th>
						<th>tipo</th>
						<th>posición</th>
						<th>administrador</th>
						<th>cuotas pagadas</th>
						<th>idjugador</th>
						<th>editar/borrar</th>
					</thead>
					<tbody>
						<?php
							for($i=0;$i<count($dataSocios);$i++){
								echo '<tr>';
								echo '<td>'.$dataSocios[$i]['idSocio'].'</td>';
								echo '<td>'.$dataSocios[$i]['fecha_inscripcion'].'</td>';
								echo '<td>'.$dataSocios[$i]['tipo'].'</td>';
								echo '<td>'.$dataSocios[$i]['posicion'].'</td>';
								echo '<td>'.$dataSocios[$i]['administrador'].'</td>';
								echo '<td>'.$dataSocios[$i]['cuotas_pagadas'].'</td>';
								echo '<td>'.$dataSocios[$i]['jugador_idjugador'].'</td>';
								echo '<td>';
								echo anchor('sociosController/editarSocioForm/'.$dataSocios[$i]['idSocio'], 'editar');
								echo '/';
								echo anchor('sociosController/borrarSocio/'.$dataSocios[$i]['idSocio'], 'borrar');
								echo '</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
				<?php	
				echo "<br>";
				echo anchor('sociosController/crearSocio', 'Crear Socio');
				?>
			</div>
		</div>
	</div>
</body>
</html>