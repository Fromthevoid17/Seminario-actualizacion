<!DOCTYPE HTML>

<html>
	<head>
		<title>Galeríá</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		
		<?php @session_start(); ?>
		<div>
			<?php 
				if (!isset($_SESSION['Correo'])) 
				{
					header("location:Login.php");
				}
			 ?>
			
		</div>
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
						<h2>Galeria</h2>
						<div class="box alt">
							<div class="row 50% uniform">
								<div class="4u"><span class="image fit"><img src="images/pic01.jpeg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpeg" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/pic04.jpeg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic05.jpeg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic06.jpeg" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/pic07.jpeg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic08.jpeg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic09.jpeg" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="images/pic02.jpeg" alt="" /></span></div>
							</div>
						</div>

					</section>
								
					
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
