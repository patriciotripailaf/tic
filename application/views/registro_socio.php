<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Registro</title>
	</head>
	<body>
	<h1>REGISTRO</h1><hr>

		<form method="POST" name="Registro" >
			<div >
				<label for="nombre">Nombre:</label>
				<input class="form-control" type="text" name="nombre" placeholder="Ingrese su primer Nombre"><br>
				<label for="apellido">Apellido:</label>
				<input class="form-control" type="text" name="apellido" placeholder="Ingrese su primer Apellido"><br>
				<label for="rut">Rut:</label>
				<input class="form-control" type="text" name="rut" placeholder="Ingrese su Rut"><br>
				<label for="sexo">Sexo:</label>
				<select class="form-control" name="sexo">
					<option value=""></option>
					<option value="">Hombre</option>
					<option value="">Mujer</option>
				</select><br>
				<label for="avatar">Imagen de perfil:</label>
				<input class="file-loading" type="file" name="avatar"><br>
				<label for="correo">Correo:</label>
				<input class="form-control" type="email" name="correo" placeholder="Correo"><br>
				<label for="user">Nombre de usuario:</label>
				<input class="form-control" type="text" name="user" placeholder="Nombre de usuario"><br>
				<label for="pass">Contraseña:</label>
				<input class="form-control" type="password" name="pass" placeholder="Contraseña"><br>
				<button class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</body>
</html>