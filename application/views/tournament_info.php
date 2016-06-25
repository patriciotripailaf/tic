<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Torneos</title>
</head>
<body>
	<div class="row">
		<div class="card-box">
			<div>
				<h1>Información de los Torneos</h1>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card-box">
				<table class="table table-striped table-bordered dt-responsive nowrap">
					<thead>
						<th>Id de Torneo</th>
						<th>Nombre</th>
						<th>Fecha</th>
						<th>Dirección</th>
						<th>Ganador</th>
						<th>Editar</th>
						<th>Borrar</th>
					</thead>
					<tbody>
						<?php
							for($i=0;$i<count($dataTorneos);$i++){
								echo '<tr>';
								echo '<td>'.$dataTorneos[$i]['idTorneo'].'</td>';
								echo '<td>'.$dataTorneos[$i]['nombreTorneo'].'</td>';
								echo '<td>'.$dataTorneos[$i]['fechaTorneo'].'</td>';
								echo '<td>'.$dataTorneos[$i]['direccion'].'</td>';
								echo '<td>'.$dataTorneos[$i]['ganador'].'</td>';
								echo '<td>';
								echo anchor('tournamentController/editarTorneoForm/'.$dataTorneos[$i]['idTorneo'], 'editar');
								echo '</td>';
								echo '<td>';
								echo anchor('tournamentController/borrarTorneo/'.$dataTorneos[$i]['idTorneo'], 'borrar');
								echo '</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
				<?php	
				echo "<br>";
				echo anchor('tournamentController/crearTorneo', 'Crear Torneo');
				?>
			</div>
		</div>
	</div>
</body>
</html>