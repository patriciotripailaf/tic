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
	<div>
		<h1>Información de los Torneos</h1>

		<div>
			<table>
				<th>Id de Torneo</th>
				<th>Nombre</th>
				<th>Fecha</th>
				<th>Dirección</th>
				<th>Ganador</th>
				<?php
					for($i=0;$i<count($dataTorneos);$i++){
						echo '<tr>';
						echo '<td>'.$dataTorneos[$i]['idTorneo'].'</td>';
						echo '<td>'.$dataTorneos[$i]['nombreTorneo'].'</td>';
						echo '<td>'.$dataTorneos[$i]['fechaTorneo'].'</td>';
						echo '<td>'.$dataTorneos[$i]['direccion'].'</td>';
						echo '<td>'.$dataTorneos[$i]['ganador'].'</td>';
						echo '</tr>';
					}
				?>
			</table>
		<?php	
		echo "<br>";
		echo anchor('tournamentController/crearTorneo', 'Crear Torneo');

		?>
		</div>
	</div>
</body>
</html>