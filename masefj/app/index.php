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
	<div class="pt-5 px-5 pe-5">
		<div class="card" style="background-color: #ffffff6b; border-radius: 2.25rem;">
			<div class="card-body">
				<form action="/action_page.php">
					<div class="mb-3 mt-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					</div>
					<div class="mb-3">
						<label for="pwd" class="form-label">Password:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					</div>
					<div class="form-check mb-3">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="remember"> Remember me
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<a href="register.php">Regístrate</a>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>