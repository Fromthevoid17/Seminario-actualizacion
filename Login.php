<!DOCTYPE HTML>

<html>
	<head>
		<title>Iniciar Sesion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body>

		<!-- Header -->
			<header id="header">
				<a href="login.php" class="logo"><strong>SNAM</strong></a>
			</header>

		<!-- Main -->
				<section id="main">
					<div class="inner">	
						<section>
							<div class="inner"><h1>Inicia sesión</h1></div>
							<form method="post" action="#">
								<div class="6u 12u$(xsmall)">
									<p><input type="Email" name="Correo" placeholder="Correo" /></p>
									<p><input type="password" name="Contraseña" placeholder="Contraseña" /></p>
									
									<p><input type="submit" name="Iniciar"/></p>
								</div>								
							</form>
						</section>
					</div>

					<div class="inner">
						<p>¿No tienes cuenta? <a href="sign in.php"> Registrate aquí</a></p>	
					</div>
					
				</section>
		<!-- PHPs -->
			<?php include("Validar usuario.php"); ?>

		<!-- Footer -->
			<footer id="footer">
			</footer>




		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
