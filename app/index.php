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
	<div class="container">
		<div class="card" style="border-radius: 2.25rem;background-color: #ffffffdb;">
			<div class="card-header text-center pt-2 pb-2">
				<div class="clearfix pt-3">
					<span class="float-start">
						<h4>Inicio de Sesión</h4>
					</span>
					<span class="float-end">
						<a href="../"><i class="fa fa-xmark fa-2x text-danger"></i></a>
					</span>
				</div>
			</div>
			<div class="card-body">
				<form action="/action_page.php">
					<div class="mb-3 mt-3">
						<label for="uname" class="form-label">Usuario:</label>
						<input type="text" class="form-control" id="uname" placeholder="Ingrese su usuario" name="uname" required>
					</div>
					<div class="mb-3 mt-3">
						<label for="pwd" class="form-label">Contraseña:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Ingrese su Contraseña" name="pswd" required>
					</div>
					<div class="clearfix pt-3 pb-3">
						<span class="float-start">
							<button type="submit" class="btn btn-success">Ingresar</button>
						</span>
						<span class="float-end">
							<a href="register.php" class="btn btn-link">Regístrate</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>