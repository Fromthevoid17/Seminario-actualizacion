<!DOCTYPE HTML>
<html>
	<head>
		<title>Inicio</title>
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

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>¡Bienvenido a nuestro sistema de animales abandonados!</h1>
					<ul class="actions">
						<li><a href="#one" class="button alt scrolly big">Continuar</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<article id="one" class="post style1">
				<div class="image">
					<img src="images/pic14.jpeg" alt="" data-position="75% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>Reportar un animal abandonado</h2>
						</header>
						<p>Si cerca de tu hogar se encuentra un animal abandonado o en un estado critico que necesite ayuda, puedes reportarlo para que alguien te ayude.</p>
						<p>Reportalo <a href="reportar.php">aquí</a></p>
					</div>
					<div class="postnav">
						<a href="#" class="prev disabled"><span class="icon fa-chevron-up"></span></a>
						<a href="#two" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

		<!-- Two -->
			<article id="two" class="post invert style1 alt">
				<div class="image">
					<img src="images/pic13.jpeg" alt="" data-position="10% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>Buscar reportes</h2>
						</header>
						<p>Puedes buscar los reportes que otros usuarios han hecho si deseas rescatar un animal que necesite tu ayuda.</p>
						<p>Encuentralos <a href="buscar.php">aquí</a></p>
					</div>
					<div class="postnav">
						<a href="#one" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#three" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

		<!-- Three -->
			<article id="three" class="post style2">
				<div class="image">
					<img src="images/pic12.jpeg" alt="" data-position="80% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>Galería</h2>
						</header>
						<p>Aqui puedes observar algunos casos de animales que fueron reportados y posteriormente rescatados. Porque
						ellos tambien merecen ser felices.</p>
						<p>Obsérvalos <a href="galeria.php">aquí</a></p>
					</div>
					<div class="postnav">
						<a href="#two" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#four" class="scrolly next"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

		<!-- Four -->
			<article id="four" class="post invert style1 alt">
				<div class="image">
					<img src="images/pic15.jpg" alt="" data-position="60% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2>Acerca de nosotros</h2>
						</header>
						<p>Aqui puedes conocernos un poco más, y saber los motivos por los cuales decidimos crear esta página.</p>
						<p>Conócenos <a href="nosotros.php">aquí</a></p>
					</div>
					<div class="postnav">
						<a href="#three" class="scrolly prev"><span class="icon fa-chevron-up"></span></a>
						<a href="#" class="scrolly next disabled"><span class="icon fa-chevron-down"></span></a>
					</div>
				</div>
			</article>

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