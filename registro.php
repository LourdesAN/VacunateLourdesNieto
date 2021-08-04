<!DOCTYPE html>
<html>

<head>
	<title> Vacuna COVID-19 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>

<body>

 <!-- comienzo del encabezado -->

	<header class="menu">

<div id="logo"> 

<img src="logo.png">

</div>

		<h1> <span>TURNOS PARA LA VACUNA</span> </h1>
		<div class="bsas">Gobierno de la provincia de <br><div id="ba">Buenos  Aires</div></br></div>
		<nav>
			<a href="index.html">Inicio</a>
			<a href="registro.php">Registrate</a>
			<a href="vacunados.php">Vacunados a la fecha</a>
		</nav>
	</header>
	
 <!-- fin del encabezado -->

<div class="completa">
	
	Completá el formulario y registrá tu solicitud

</div>
<p>



			


	<section class="registro">
		<form method = "POST">

	<h1>Datos personales y de contacto </h1>
		<h3 id="texto">		Nombre: </h3>
		<input class="bloque" type = "text" name="nombre" placeholder="Ingrese su nombre"/>
		
		<p><h3 id="texto"> Apellido: </h3></p>
		<input class="bloque" type = "text" name="apellido" placeholder="Ingrese su apellido"/>
		
		<p><h3 id="texto"> DNI: </h3></p>
		<input class="bloque" type = "int" name="dni" placeholder="Ingrese su DNI"/>
		
		<p><h3 id="texto"> Fecha de nacimiento: </h3></p>
		<input class="bloque" type = "date" name="fecha" placeholder="dd/mm/aaaa"/>
		
		<p><h3 id="texto"> Email: </h3></p>
		<input class="bloque" type = "text" name="correo" placeholder="Ingrese su correo " />


		<p><input class="bloque" type="submit" value="Enviar" name="enviar" id="boton"></p>

	

</form>

			<?php
				include("cargadatos.php");
			?>

</section>

</body>
</html>