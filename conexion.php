<?php
$conexion = mysqli_connect('localhost', 'root', '', 'vacuna');

if(!$conexion){
    echo "<h2>No se puede conectar</h2>";
 	die(); 
}
?>
