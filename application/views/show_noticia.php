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
	<div class="card-box"	>
		<?php

		echo '<h1>'.$dataNoticias[0]['titular'].'</h1>';

		echo $dataNoticias[0]['contenido'];

		?>
	</div>
	</div>
	<div class="col-lg-6">
	<div class="card-box"	>
		<h1> Comentarios</h1>
			<table class="table table-striped table-bordered dt-responsive nowrap">
                        					<thead>

				<th>Usuario</th>
				<th>Comentario</th>
				<th>Fecha</th>
				</thead>
				<tbody>
				<?php

					for($i=0;$i<count($comentario);$i++){
						echo '<tr>';
						echo '<td>'.$comentario[$i]['usuario'].'</td>';
						echo '<td>'.$comentario[$i]['comentario'].'</td>';
						echo '<td>'.$comentario[$i]['fecha'].'</td>';
						echo '</tr>';
					}
				?>
				</tbody>
			</table>
	</div>
	</div>
	<div class="col-lg-6">
	<div class="card-box"	>
		<h1>agregar Comentario</h1>
		<?php
			echo form_open('noticiasController/nuevoComentario/'.$dataNoticias[0]['idNoticia'])."<br>";
			echo form_label('Comentario:', 'comentario')."<br>";
			echo form_textarea('comentario')."<br>";
			echo "<br>";
			echo form_submit('enviar', 'Crear');
			echo form_close();
		?>

	</div>
	</div>

</body>
</html>