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
			<th>Nombre</th>
			<th>Fecha</th>
			<th>Dirección</th>
			<th>Ganador</th>
			<?php

				$tournamentInfo[0]['nombre']='torneo uno';
				$tournamentInfo[0]['fecha']='04/02/15';
				$tournamentInfo[0]['direccion']='calle 1';
				$tournamentInfo[0]['ganador']='jugador 1';
				$tournamentInfo[1]['nombre']='torneo dos';
				$tournamentInfo[1]['fecha']='09/05/15';
				$tournamentInfo[1]['direccion']='calle 2';
				$tournamentInfo[1]['ganador']='jugador 2';
				$tournamentInfo[2]['nombre']='torneo tres';
				$tournamentInfo[2]['fecha']='15/01/16';
				$tournamentInfo[2]['direccion']='calle 3';
				$tournamentInfo[2]['ganador']='jugador 3';

				for($i=0;$i<count($tournamentInfo);$i++){
					echo '<tr>';
					echo '<td>'.$tournamentInfo[$i]['nombre'].'</td>';
					echo '<td>'.$tournamentInfo[$i]['fecha'].'</td>';
					echo '<td>'.$tournamentInfo[$i]['direccion'].'</td>';
					echo '<td>'.$tournamentInfo[$i]['ganador'].'</td>';
					echo '</tr>';
				}
			?>
		</table>
		<?php	
		echo form_open('info_torneos/crear_torneo')."\n";
		echo form_submit('crear', 'Crear torneo');
		echo form_close();

?>
		</div>
	</div>
</body>
</html>