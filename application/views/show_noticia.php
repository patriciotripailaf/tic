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
				<?php

						echo '<tr>';
						echo '<td>'.$dataNoticias[0]['titular'].'</td>';
						echo '<td>'.$dataNoticias[0]['fecha'].'</td>';
						echo '</tr>';

				?>
			</table>
		<?php	
		echo "<br>";
		

		?>
		</div>
	</div>
</body>
</html>