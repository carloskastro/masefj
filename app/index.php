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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">	
</head>
<body class="bg-login">
	<?php 

	require_once 'conn.php';
	session_start();
	$msg=null;

	if (isset($_POST['ingresar'])) {

		$result=$conn->prepare('SELECT * FROM aprendiz WHERE user=?');
		$result->bindparam(1,$_POST['user']);
		$result->execute();

		$data=$result->fetch(PDO::FETCH_ASSOC);

		if ($data['user']==$_POST['user']) {

			if (password_verify($_POST['pass'], $data['pass'])) {
				
				$_SESSION['usuario']=$data['idaprendiz'];
				header('location: home.php');
			}else{
				$msg="Contraseña incorrecta";
			}

		}else{
			$msg="Usuario incorrecto";
		}
	}

	?>
	<div class="container login">
		<?php 
			if ($msg!='') { ?>
			
			<div class="alert alert-danger alert-dismissible" style="border-radius:2.25rem;">
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				<strong>Alerta!</strong><br><?php echo $msg; ?>.
			</div>

			<?php }	?>
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
				<form action="" method="post" enctype="application/x-www-form-urlencoded">
					<div class="mb-3 mt-3">
						<label for="uname" class="form-label">Usuario:</label>
						<input type="text" class="form-control" placeholder="Ingrese su usuario" name="user" required autofocus>
					</div>
					<div class="mb-3 mt-3">
						<label for="pwd" class="form-label">Contraseña:</label>
						<input type="password" class="form-control" placeholder="Ingrese su Contraseña" name="pass" required>
					</div>
					<div class="clearfix pt-3 pb-3">
						<span class="float-start">
							<button type="submit" class="btn btn-success" name="ingresar">Ingresar</button>
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