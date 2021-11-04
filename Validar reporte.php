<!DOCTYPE html>
<html>
<head>
	<title>Gracias por su reporte</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	
</head>
<body>

	<?php
		if (isset($_POST['button'])) 
			{
			if ( strlen($_POST['tipo']) >= 1 && strlen($_POST['color']) >= 1
					&& strlen($_POST['tamaño']) >= 1 && strlen($_POST['estado']) >= 1
					&& strlen($_POST['ciudad']) >= 1 && strlen($_POST['barrio']) >= 1
					&& strlen($_POST['referencia']) >= 1 ) 
			    {

					$servername = "localhost";

					$username = "root";

					$password = "newton123";

					$dbname = "animales abandonados";

					$conn = new mysqli($servername, $username, $password, $dbname);

						if($conn->connect_error){

							die("Connection failed: " . $conn->connect_error);

						}

					$tipo = $_POST["tipo"];

					$color = $_POST["color"];

					$tamaño = $_POST["tamaño"];

					$estado = $_POST["estado"];

					$ciudad = $_POST["ciudad"];

					$barrio = $_POST["barrio"];

					$referencia = $_POST["referencia"];

					$sql = "INSERT INTO detalleanimal (tipo, color, tamano, estado) VALUES ('$tipo', '$color', '$tamaño', '$estado')";

					$result = $conn->query($sql);

					$sql1 = "SELECT * FROM detalleanimal ORDER BY idDetalleAnimal DESC LIMIT 1";

					$maxid = $conn->query($sql1);

					$ids = $maxid->fetch_assoc();

					$animal = $ids['idDetalleAnimal'];

					$sql2 = "INSERT INTO direccion (barrio, ciudad, puntoReferencia, idDetalleAnimal) VALUES ('$barrio', '$ciudad', '$referencia', '$animal')";

					$result2 = $conn->query($sql2);

					?> 
					    <div align="center">
					    	<h3>¡Gracias por su reporte!</h3>
						</div>
						<script src="assets/js/push.js/push.min.js"></script>
						<script>
							Push.create("Nuevo animal abandonado", {
	    						body: "Ayudalo!",
	    						icon: 'images/icon.png',
	    						timeout: 4000,
	    						onClick: function () 
	    						{
		        					window.location="https://snna.000webhostapp.com/buscar.php";
		        					this.close();
    							}	
							});
						</script>
			        <?php
						
				}
				else
				{
				    ?> 
					    <div align="center">
					    	<h3>¡Por favor complete los campos!</h3>
					    </div>
			        <?php
			    }
			}

	?>

</body>
</html>