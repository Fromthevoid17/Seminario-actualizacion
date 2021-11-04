<?php
	include("bd.php");

	if (isset($_POST['Iniciar'])) 
	{
		$Correo=$_POST['Correo'];
		$Contraseña=$_POST['Contraseña'];
		session_start();
		$_SESSION['Correo']=$Correo;


		$conexion=mysqli_connect("localhost","root","newton123","animales abandonados");

		$consulta="SELECT*FROM usuario where correo='$Correo' and contraseña='$Contraseña'";
		$resultado=mysqli_query($conexion,$consulta);

		$filas=mysqli_num_rows($resultado);

		if($filas)
		{	
			session_start();
			$_SESSION['Correo'] = $_POST['Correo'];
	  
	    	header("location:index.php");

		}else
		{
	    	?>
	  			<h1>ERROR DE AUTENTIFICACION</h1>
	  		<?php
		}
		mysqli_free_result($resultado);
		mysqli_close($conexion);
	}
	

?>