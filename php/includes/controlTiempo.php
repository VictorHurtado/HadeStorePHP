<?php

	session_start();
	$segundosInicio = $_SESSION['inicio'];
	$segundosAhora = strtotime(date("Y-m-d H:i:s"));
	$segundosTranscurridos = $segundosAhora-$segundosInicio;

	if($segundosTranscurridos > $_SESSION['intervalo']){

		$_SESSION['nombre']=NULL;  
		$_SESSION['dni']=NULL;  
		$_SESSION['tipo']=NULL;  
		header('Location:login.php');
	}else{

	$_SESSION['inicio'] = strtotime(date("Y-m-d H:i:s"));
}




?>