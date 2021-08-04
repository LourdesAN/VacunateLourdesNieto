<!DOCTYPE html>
<html>

<head>
	<title> Vacuna COVID-19 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>

<body>
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
<h2 style="color:#23AEC5" >
<?php 
  // Se conecta al SGBD 
  $conexion = mysqli_connect('localhost', 'root', '', 'vacuna');
    if(!$conexion){
        echo 'error al conectar a la base de datos';
        die();
    }

 
  // Sentenciavacunados SQL: muestra todo el contenido de la tabla "datos" 
$sentenciavacunados = "CALL vacunados_select()"; 
  //$sentenciavacunados = "CALL vacunados_update ('PEREZ', 4)";
  //$sentenciavacunados = "CALL vacunados_delete(7)";
  //$sentenciavacunados = "CALL vacunados_insertinto('LUCAS', 'RAMIREZ')";
    
    


  // Ejecuta la sentenciavacunados SQL 
  $resultadovacunados = mysqli_query($conexion, $sentenciavacunados); 
  if(!$resultadovacunados) 
    die("Error: no se pudo realizar la consulta");
  
  echo '<table>'; 

  //ESTE WHILE NO SE USA SI LA CONSULTA NO ES DE SELECCIÓN
  while($fila = mysqli_fetch_array($resultadovacunados)) 
  { 
    echo '<tr>'; 
    echo '<td>' . $fila['id'] . '</td><td>' . $fila['nombre'] . '</td><td>' . $fila['apellido'] . '</td>'; 
    echo '</tr>'; 
  } 
  echo '</table>';
  
  // Cierra la conexión con la base de datos 
  mysqli_close($conexion); 
?> 
</h2>
</body> 
</html> 