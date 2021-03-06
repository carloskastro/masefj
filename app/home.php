<!DOCTYPE html>
<html lang="es-CO" class="h-100">
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">	
</head>
<body class="bg-light d-flex flex-column h-100">
	<?php 
	require_once 'conn.php';
	session_start();
	$user=null;

	if (isset($_SESSION['usuario'])) {
		$result=$conn->prepare('SELECT * FROM aprendiz WHERE idaprendiz=?');
		$result->bindparam(1,$_SESSION['usuario']);
		$result->execute();

		$data=$result->fetch(PDO::FETCH_ASSOC);

		if (count($data)>0) {
			$user=$data;
		}

		if (!empty($user)) {
	?>
<!--Navbar-->
		<header>
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"><img src="../assets/img/logosena.png" style="width: 40px;"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavbar">

						<ul class="nav navbar-nav me-auto" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="home.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#ficha">Ficha</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#compromiso">Compromiso</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#tratamiento">Tratamiento</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="tabla.php">Tabla</a>
							</li>
						</ul>

						<span class="badge bg-warning">Hola Usuario</span>
						<div class="navbar-brand dropdown">
							<button type="button" class="navbar-brand btn btn-link dropdown-toggle" data-bs-toggle="dropdown">
								<img src="../assets/img/img_avatar.png" alt="Logo" style="width:40px;" class="rounded-pill">
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Datos</a></li>
								<li><a class="dropdown-item" href="logout.php">Salir</a></li>
							</ul>
						</div>	
					</div>
				</div>
			</nav>
		</header>
		<!--Navbar-->

		<!--Content-->
		<main class="mt-5 pt-5">

			<div class="tab-content">
				<div id="home" class="container tab-pane active text-center">
					<h3>Bienvenido</h3>
					<p>Hola usuario aqu?? podr??s diligenciar los datos para generar los formatos correspondientes a la matr??cula Sena.</p>
					<img src="../assets/img/logoasem.png" alt="LogoAsem"  style="width:290px;">
				</div>
				<div id="ficha" class="container tab-pane fade">
					<h3>Ficha de Matr??cula</h3>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div id="compromiso" class="container tab-pane fade">
					<h3>Compromiso como Aprendiz Sena</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				</div>
				<div id="tratamiento" class="container tab-pane fade">
					<h3>Tratamiento de Datos Menor de Edad</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				</div>
			</div>

		</main>
		<!--Content-->

		<!--Footer-->
		<footer class="footer mt-auto py-3 bg-dark">
			<div class="container text-center">
				<span class="text-muted">&copy; Copyright ASEM.</span>
			</div>
		</footer>
		<!--Footer-->

<?php 
	}
}else{
	header('location: ./');
}
?>
</body>
</html>