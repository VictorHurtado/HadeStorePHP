<?php

$conexion = mysqli_connect("localhost","root","");


mysqli_select_db($conexion,"hade_store");


date_default_timezone_set("America/Bogota");


mysqli_query($conexion,"SET NAMES utf8");
mysqli_query($conexion,"SET CHARACTER_SET utf");
$s='$';


function limpiar($tags){
  return $tags;
}
?>
