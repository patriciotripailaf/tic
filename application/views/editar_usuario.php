<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Editar Datos</title>
	</head>
	<body>	
	<h1>EDITAR DATOS</h1><hr>
		<form method="POST" name="Registro" >
			<div >
				<label for="sexo">Sexo:</label>
				<select class="form-control" name="sexo">
					<option value=""></option>
					<option value="">Hombre</option>
					<option value="">Mujer</option>
				</select><br>
				<label for="avatar">Imagen de perfil:</label>
				<input class="file-loading" type="file" name="avatar"><br>
				<label for="correo">Correo:</label>
				<input class="form-control" type="email" name="correo" placeholder="Correo:"><br>
				<label for="pass">Contraseña:</label>
				<input class="form-control" type="password" name="pass" placeholder="Contraseña:"><br>
				<button class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</body>
</html>