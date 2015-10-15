<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>VideoCoba</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="body" class="container">
		<div id="h" class="page-header">
			<header>
				<h1>Loggin de la aplicación <strong>VideoCoba</strong></h1>
			</header>
		</div>
		<form action="" method="POST">
			<div class="form-group">
				<label for="user">Usuario:</label>
					<input id="log" type="text" class="form-control" name="user" value="<?php if ( isset($user) ) echo $user; ?>">
					<?php if ( isset($mistakes['user-empty']) ) : ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Cuidado!!</strong> Es necesario introducir el nombre de usuario.
						</div>
					<?php endif; ?> 
			</div>
			<div class="form-group">	
				<label for="psw">Contraseña:</label>
				<br>
					<input id="log" type="password" class="form-comtrol" name="psw">
					<?php if ( isset($mistakes['psw-empty']) ) : ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Cuidado!!</strong> Es necesario introducir la contraseña.
						</div>
					<?php endif; ?>
			</div>
			<hr>
			<div>
				<button class="btn btn-info">Identificar</button>
			</div>		
		</form>
	</div>	
</body>
</html>