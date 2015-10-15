<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>VideoCoba. Registrar usuario.</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Registro de usuario.</h1>
			<hr>
		</header>
		<form action="" method="POST">
		<div class="form-group">
			<label for="name">Nombre:</label>
		</div>	
		<div class="form-group">
			<label for="user">Usuario:</label>
		</div>
		<div class="form-group">	
			<label for="psw">Contraseña:</label>
		</div>
		<div class="form-group">	
			<label for="psw2">Repetir contraseña:</label>
		</div>
		<div class="form-group">	
			<label for="email">E-mail:</label>
		</div>
		<div class="form-group">	
			<label for="photo">Foto del usuario:</label>
		</div>
		<div class="form-group">	
			<textarea name="description" id="description" cols="40" rows="15" placeholder="Breve descripción..."></textarea>
		</div>
		<div>
			<button class="btn btn-primary">Registrar</button>
		</div>
		</form>
	</div>
	<div id="a" class="container">
		<a href="login.html.php">Volver atrás.</a>
	</div>
</body>
</html>