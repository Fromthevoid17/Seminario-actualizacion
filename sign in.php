<!DOCTYPE HTML>

<html>
	<head>
		<title>Registrarse</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body>

		<!-- Header -->
			<header id="header">
				<a href="sign in.php" class="logo"><strong>SNAM</strong></a>
			</header>

		<!-- Main -->
				<section id="main">
					<div class="inner">	
						<section>
							<div class="inner"><h1>Registro</h1></div>
							<form method="post" action="#" >
								<div class="row uniform 50%">
									<div class="3u 4u$(xsmall)" >
										<input type="text" name="Nombres" placeholder="Nombres" />
									</div>
									<div class="3u 3u$(xlarge)">
										<input type="text" name="Apellidos" placeholder="Apellidos" />
									</div>
									<div class="3u 4u$(xsmall)" >
										<input type="text" name="Edad" placeholder="Edad" />
									</div>
									<div class="3u 4u$(xlarge)" >
										<input type="text" name="Sexo" placeholder="Sexo" />
									</div> 
									<div class="6u 12u$(xsmall)">
										<p><input type="Email" name="Correo" placeholder="Correo" /></p>
										<p><input type="text" name="Contraseña" placeholder="Contraseña" /></p>
										<p><input type="text" name="Telefono" placeholder="Telefono" />	</p>
										<p><input type="submit" name="Registrarse"/></p>
									</div>
								
								</div>
							</form>
						</section>
					</div>
					<div class="inner">
						<p>¿Ya tienes cuenta? <a href="login.php"> Inicia sesión aquí</a></p>	
					</div>
					
				</section>

		<!-- PHPs -->
			<?php include("Registro.php"); ?>

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
