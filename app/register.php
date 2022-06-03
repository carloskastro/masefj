<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Team Mase">
	<meta name="description" content="Es un aplicativo para las matriculas del Sena">
	<meta name="keywords" content="Mase, mase, MASE, aplicativo web">
	<meta name="theme-color" content="#ff2e01">
	<meta name="MobileOptimized" content="width">
	<meta name="HandhledFriendly" content="true">
	<title>Mase</title>

	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="../assets/img/logosena.png">

	<!--Bootstrap 5-->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
</head>
<body class="bg-login">
	<?php
	require_once 'conn.php';

	if (isset($_POST['reg'])) {
		$record=$conn->prepare('INSERT INTO aprendiz(nombre,apellido,email,tipodoc,documento,user,pass) VALUES(?,?,?,?,?,?,?)');
		$record->bindparam(1,$_POST['nombre']);
		$record->bindparam(2,$_POST['apellido']);
		$record->bindparam(3,$_POST['email']);
		$record->bindparam(4,$_POST['tipodoc']);
		$record->bindparam(5,$_POST['documento']);
		$record->bindparam(6,$_POST['user']);
		$pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
		$record->bindparam(7,$pass);

		if ($record->execute()) {
			echo "Datos registrados";
		}else{
			echo "Revise los datos";
		}
	}

	?>
	<div class="container">
		<div class="pt-5 text-center">
			<div class="card" style="border-radius: 2.25rem;background-color: #ffffffdb;">
				<div class="card-body">
					<form action="" method="post" enctype="application/x-www-form-urlencoded">
						<h4>Registro de Usuario</h4>
						<div class="mb-3 mt-3">
							<input type="text" class="form-control" name="nombre" placeholder="Nombres" required="required">
						</div>
						<div class="mb-3 mt-3">
							<input type="text" class="form-control" name="apellido" placeholder="Apellidos" required="required">
						</div>
						<div class="mb-3 mt-3">
							<input type="email" class="form-control" name="email" placeholder="Email" required="required">
						</div>
						<div class="mb-3 mt-3">
							<select name="tipodoc" class="form-select" required="required">
								<option selected disabled>Tipo de documento</option>
								<option value="TI">TI</option>
								<option value="CC">CC</option>
							</select>
						</div>
						<div class="mb-3 mt-3">
							<input type="text" class="form-control" name="documento" placeholder="Documento" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							</div>
							<div class="mb-3 mt-3">
								<input type="text" class="form-control" name="user" placeholder="Usuario" required="required">
							</div>
							<div class="mb-3 mt-3">
								<input type="password" class="form-control" name="pass" placeholder="Contraseña" required="required">
							</div>
							<!--<div class="mb-3 mt-3">
								<input type="password" class="form-control" name="confirm_password" placeholder="Confirma Contraseña" required="required">
							</div>-->
							<div class="mb-3 mt-3">
								<label class="form-check-label">
									<input type="checkbox" required="required"> Acepta
									<a href="#">Terminos, condiciones</a> &amp;
									<a href="#">Politica de Privacidad</a>
								</label>
							</div>
							<div class="mb-3 mt-3">
								<button type="submit" class="btn btn-success" name="reg">Regístrate</button>
							</div>
					</form>
					<div class="text-center">Ya tienes una cuenta?
						<a href="./">Iniciar sesión</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>