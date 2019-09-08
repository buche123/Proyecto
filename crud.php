<?php

require 'conexionbs.php';
$dbho = new conexionbs();

if (isset($_POST['Enviar'])){

	$nombre = mysqli_real_escape_string($dbho, htmlentities($_POST['nombre']));
	$apellido = mysqli_real_escape_string($dbho, htmlentities($_POST['apellido']));
	$fecha = mysqli_real_escape_string($dbho, htmlentities($_POST['fecha']));
    $tipo_identificacion =mysqli_real_escape_string($dbho, htmlentities( $_POST['tipo_identificacion']));
	$documento =mysqli_real_escape_string($dbho, htmlentities( $_POST['documento']));
	$telefono = mysqli_real_escape_string($dbho, htmlentities($_POST['telefono']));
	$ciudad= mysqli_real_escape_string($dbho, htmlentities($_POST['ciudad']));
	$barrio = mysqli_real_escape_string($dbho, htmlentities($_POST['barrio']));
	$direccion = mysqli_real_escape_string($dbho, htmlentities($_POST['direccion']));
	$correo = mysqli_real_escape_string($dbho, htmlentities($_POST['correo']));

	$query="INSERT INTO `registro`(`nombre`, `apellido`, `fecha`, `tipo_identificacion`, `documento`, `telefono`, `ciudad`, `barrio`, `direccion`, `correo`) VALUES ('$nombre', '$apellido', '$fecha', '$tipo_identificacion', '$documento', '$telefono', '$ciudad', '$barrio', '$direccion', '$correo')";
	$dbho -> query($query);
	echo('Datos guardados');
 } 
 



?>

<!DOCTYPE html>
<html>
   
<head>
	
</head>
<body>
 <meta http-equiv="Refresh" content="0;url='http://localhost/autolavado/inicios.php'">  
</body>
</html>