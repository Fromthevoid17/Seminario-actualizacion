<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Buscar reportes</title>
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
					<header class="major special">
						<h1>Reportes generados</h1>	
					</header>
					<p>Aqui se encuentran los reportes de animales abandonados que han hecho los demas usuarios</p>
					<section>
							<h4>Default</h4>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Ciudad</th>
											<th>Dirección</th>
											<th>Punto de referencia</th>
											<th>Animal</th>
											<th>Detalles</th>
										</tr>
									</thead>
									<tbody>
										<?php

										$servername = "localhost";

										$username = "root";

										$password = "newton123";

										$dbname = "animales abandonados";

										$conn = new mysqli($servername, $username, $password, $dbname);

										if($conn->connect_error){

											die("Connection failed: " . $conn->connect_error);

										}

										$sql = "SELECT direccion.idDireccion, direccion.idDetalleAnimal, direccion.barrio, detalleanimal.tipo, direccion.ciudad, direccion.puntoReferencia, detalleanimal.color, detalleanimal.tamano, detalleanimal.estado FROM `direccion` INNER JOIN detalleanimal ON direccion.idDetalleAnimal = detalleanimal.idDetalleAnimal";

										$result = mysqli_query($conn, $sql);

										if($result-> num_rows > 0){

											while($row = $result-> fetch_assoc()){

												echo "<tr><td>" . $row["ciudad"] . "</td><td>" . $row["barrio"] . "</td><td>" . $row["puntoReferencia"]. "</td><td>" . $row["tipo"] . "</td><td>". $row["color"] . " - " . $row["tamano"] . " - " . $row["estado"] ."</td></tr>";

											}

											echo "</tbody>";

										}else{

											echo "0 Results";

										}

										$conn-> close();

										?>
									</tbody>
								</table>
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