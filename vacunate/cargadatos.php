<!DOCTYPE html>
<html lang="es-ES">
<head>
<title> Carga de Datos </title>
	<meta charset="utf-8">
	<link rel= "stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
<section class= "registro"> 


<?php

 include ('conexion.php');


if (isset($_POST['enviar'])){
	
	if (strlen($_POST['nombre']) >= 1 &&
		strlen($_POST['apellido']) >= 1 &&
		strlen($_POST['dni']) >= 1 &&
		strlen($_POST['fecha']) >= 1 &&
		strlen($_POST['correo']) >= 1) {

			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$dni = $_POST['dni'];
			$fecha = $_POST['fecha'];
			$correo = $_POST['correo'];

			$fechareg = date("d/m/y");

$consulta = "INSERT INTO datos (nombre, apellido, dni, fecha, correo, fecha_reg) VALUES ('$nombre', '$apellido', '$dni', '$fecha', '$correo', '$fechareg')";

$resultado = mysqli_query($conexion, $consulta);


}

}


?>
</section>
</body>
</html>
