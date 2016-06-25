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


                        		<div class="card-box">

                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                        			<h4 class="header-title m-t-0 m-b-30">Input Types</h4>

                        			<div class="row">
                        				<div class="col-lg-6">
                        					<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
                        					<thead>
				<th>Id de Torneo</th>
				<th>Nombre</th>
				<th>Fecha</th>
				<th>Dirección</th>
				</thead>
				<tbody>

				<?php
					for($i=0;$i<count($dataNoticias);$i++){
						echo '<tr>';
						echo '<td>'.anchor('noticiasController/getNoticia/'.$dataNoticias[$i]['idnoticias'], $dataNoticias[$i]['idnoticias']).'</td>';
						echo '<td>'.$dataNoticias[$i]['titular'].'</td>';
						echo '<td>'.$dataNoticias[$i]['fecha'].'</td>';
						echo '<td>'.$dataNoticias[$i]['autor'].'</td>';
						echo '</tr>';
					}
				?>
				</tbody>
			</table>
                        				</div><!-- end col -->

                        				<div class="col-lg-6">
                        					<a class="twitter-timeline" data-width="400" data-height="500" href="https://twitter.com/TwitterDev/timelines/539487832448843776">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        				</div><!-- end col -->

                        			</div><!-- end row -->
                        		</div>


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
						echo '<td>'.anchor('noticiasController/getNoticia/'.$dataNoticias[$i]['idnoticias'], $dataNoticias[$i]['idnoticias']).'</td>';
						echo '<td>'.$dataNoticias[$i]['titular'].'</td>';
						echo '<td>'.$dataNoticias[$i]['fecha'].'</td>';
						echo '<td>'.$dataNoticias[$i]['autor'].'</td>';
						echo '</tr>';
					}
				?>
			</table>
			<a class="twitter-timeline" data-width="220" data-height="200" href="https://twitter.com/TwitterDev/timelines/539487832448843776">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<?php	
		echo "<br>";
		echo anchor('noticiasController/crearNoticia', 'Crear noticia');

		?>
		</div>
	</div>

	
</body>
</html>