<?php 

	include("bd.php");

	if (isset($_POST['Registrarse'])) 
	{
	    if ( strlen($_POST['Nombres']) >= 1 && strlen($_POST['Apellidos']) >= 1
			&& strlen($_POST['Correo']) >= 1 && strlen($_POST['Contraseña']) >= 1
			&& strlen($_POST['Edad']) >= 1 && strlen($_POST['Telefono']) >= 1
			&& strlen($_POST['Sexo']) >= 1 ) 
	    {
		    $Nombres = $_POST['Nombres'];
		    $Apellidos = $_POST['Apellidos'];
		    $Correo = $_POST['Correo'];
		    $Contraseña = $_POST['Contraseña'];
		    $Edad = $_POST['Edad'];
		    $Telefono = $_POST['Telefono'];
		    $Sexo = $_POST['Sexo'];
		    
			
		    $consulta = "INSERT INTO  usuario (nombre, apellidos, correo, contraseña, edad, telefono, sexo) VALUES ('$Nombres','$Apellidos', '$Correo', '$Contraseña', $Edad, '$Telefono', '$Sexo')";

		    $resultado = mysqli_query( $conex, $consulta );

		    if ($resultado) 
		    {
		    	?> 
		    		<h3>¡Te has registrado correctamente!</h3>
		    	<?php
		    } 
		    else 
		    {
		    	?> 
		    	<h3>¡Ups ha ocurrido un error! </h3>
	           <?php
		    }
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