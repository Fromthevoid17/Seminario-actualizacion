<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Acerca de nosotros</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<?php 

			session_start();
			if (!isset($_SESSION['Correo'])) {

				header("location:Login.php");

			}

		 ?>
		<!-- Header -->
			<header id="header">
				<a href="index.php" class="logo"><strong>SNAM</strong></a>
				<nav>
					<a href="#menu">Menú</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="reportar.php">Reportar</a></li>
					<li><a href="buscar.php">Buscar reportes</a></li>
					<li><a href="galeria.php">Galería</a></li>
					<li><a href="Nosotros.php">Acerca de nosotros</a></li>
					<li><a href="cierre.php">Cerrar Sesión</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<div class="image fit">
						<img src="images/pic10.jpeg" alt="" />
					</div>
				</div>
				<div class="inner">
					<header>
						<h2>Acerca de nosotros</h2>
					</header>
					<p>
						Creamos este sistema de notificaciones principalmente para ayudar a todos esos animales que se encuentran en situación de abandono en la ciudad de Cartagena y otros municipios.
					</p>
					
					<p>
						Somos dos estudiantes del programa de ingeniería de sistemas de la universidad de Cartagena, y como habitantes de esta ciudad, hemos observado la cantidad de fauna domestica sin hogar que abunda en las calles. Este es el gran motivo de la creación de esta página web, tratar de solventar este problema con nuestro sistema de notificaciones.
					</p>
						
					<p>
						No somos veterinarios, y tampoco somos una fundación o refugio, somos ciudadanos defensores del bienestar animal, quienes buscamos ayudar a la mayor cantidad de animales abandonados y que la gente al usar esta página web sea consciente del gran número de animales en la calle que necesitan.
					</p>	
				</div>
			</section>
								
					
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. 
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>