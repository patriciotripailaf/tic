<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Login / Registro</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="estilo.css" rel="stylesheet">
	</head>
	<body>	
		<div class="registro">
			<form method="POST" name="Registro" >
				<div class="">
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<input class="form-control" type="text" name="nombre" placeholder="Nombre:">
					</div>
					<div class="form-group">
						<label for="apellido">Apellido:</label>
						<input class="form-control" type="text" name="apellido" placeholder="Apellido:">
					</div>
					<div class="form-group">
						<label for="sexo">Sexo:</label>
						<select class="form-control" name="sexo">
							<option value="">Hombre</option>
							<option value="">Mujer</option>
						</select>
					</div>
					<div class="form-group">
						<label for="avatar">Imagen de perfil:</label>
						<input class="file-loading" type="file" name="avatar">
						<p class="help-block">Máximo 50MB</p>
					</div>
					<div class="form-group">
						<label for="correo">Correo:</label>
						<input class="form-control" type="email" name="correo" placeholder="Correo:">
					</div>
					<div class="form-group">
						<label for="user">Nombre de usuario:</label>
						<input class="form-control" type="text" name="user" placeholder="Nombre de usuario:">
					</div>
					<div class="form-group">
						<label for="pass">Contraseña:</label>
						<input class="form-control" type="password" name="pass" placeholder="Contraseña:">
					</div>
					<button class="btn btn-primary">Enviar</button>
				</div>
			</form>
		</div>
	</body>
</html>