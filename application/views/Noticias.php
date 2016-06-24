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
					for($i=0;$i<count($dataNoticias);$i++){
						echo '<tr>';
						echo '<td>'.$dataNoticias[$i]['idnoticias'].'</td>';
						echo '<td>'.$dataNoticias[$i]['titular'].'</td>';
						echo '<td>'.$dataNoticias[$i]['fecha'].'</td>';
						echo '<td>'.$dataNoticias[$i]['autor'].'</td>';
						echo '</tr>';
					}
				?>
			</table>
		<?php	
		echo "<br>";
		echo anchor('noticasController/crearNoticia', 'Crear noticia');

		?>
		</div>
	</div>
</body>
</html>