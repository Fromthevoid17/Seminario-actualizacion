<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Reportar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
  	#map{
  		width: 400px;
  		height: 300px;
  	}
  	</style>

    <script
       src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS-d5dC7YyDDgubxhMAf9178mkADgmnYQ&callback=initMap"
      defer>  	
    </script>

    <script>
    
    //variables globales
    let map;
    let marker;
    let watchId;
    let geoLoc;

    //Funcion para marcar la ubicacion
    function initMap(){
    const myLatlng = { lat: -25.363, lng: 131.844};

    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 18,
      center: myLatlng,
    });
      marker = new google.maps.Marker({
        position: myLatlng,
        map,
        tittle: "Tu ubicacion actual"
      });

      getPosition();
    }

    //funcion para obtener la ubicacion
    function getPosition(){

      if (navigator.geolocation) { 

        var options = {timeout: 60000};
        geoLoc = navigator.geolocation;
        watchId = geoLoc.watchPosition(showLocationOnMap, errorHandler, options);

        }
        else{

          alert("Tu navegador no soporta geolocalizacion");

        }

    }

    //funcion para  mostrar la ubicacion obtenida ya marcada
    function showLocationOnMap(position) {

      var latitud = position.coords.latitude;
      var longitud = position.coords.longitude;

      https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&result_type=stree_address&key=YOUR_API_KEY

      console.log("latitud: " + latitud + "longitud: " + longitud);

      const myLatlng = {lat: latitud, lng: longitud};
      marker.setPosition(myLatlng);
      map.setCenter(myLatlng);

    }

    //Por si el usuario no tiene la ubicacion disponible
    function errorHandler(err){
      if(err.code == 1){
        alert("Error: Acceso denegado!");
      }else if (err.code == 2) {
        alert("Error: Position no existe o no se encuentra!");
      }
    }
    </script>
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
					<div class="image fit">
						<img src="images/pic11.jpeg" alt="" />
					</div>
				</div>
				<div class="inner">	
					<h3>Detalles del animal</h3>
					<form method="post" action="#">
						<div class="row uniform 50%">
							<div class="6u 12u$(xsmall)">
								<p><input type="text" name="tipo" placeholder="Tipo de animal Ej: Perro, gato, etc" /></p>
								<p><input type="text" name="color" placeholder="Color" /></p>
								<p><input type="text" name="tamaño" placeholder="Tamaño" /></p>
								<p><input type="text" name="estado"  value="" placeholder="En que estado se encuentra el animal" /></p>
								<p><input type="text" name="ciudad"  value="" placeholder="Ciudad en la que se encuentra"></p>
								<p><input type="text" name="barrio"  value="" placeholder="Barrio en el que se encuentra"></p>
								<p><input type="text" name="referencia"  placeholder="Punto de Referencia Ej:Parque, estatua, etc"></p>

								<div align="center"><h3>Esta es su ubicacion actual</h3></div>

								<div id="map" class="inner"></div>
								<div align = "center">
									<p><input type="submit" name="button"></p>
								</div>

							</div>	
						</div>
					</form>
				</div>
			<!-- PHPs -->
				<?php include("Validar reporte.php"); ?>

			
			 

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