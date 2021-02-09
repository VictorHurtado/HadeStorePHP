<?php
session_start();
include_once "../Modelo/clientes.php";

if(isset($_POST['dni'])){
  $dni= $_POST['dni'];
  if($dni == ''){
    echo mensajes('Por favor digite un usuario','azul');
  }else {
    $cliente= new cliente();
    $usuario = $cliente->getUsuario($dni);
    if(password_verify($_POST['contrasena'],$usuario['contrasena'])){
      echo mensajes('Bienvenido'.$usuario['nombre'].'','verde');

      $_SESSION['nombre']    =  $usuario['nombre'];
      $_SESSION['dni']       =  $usuario['dni'];
      $_SESSION['tipo']      =  $usuario['tipo_usuario'];
      if($usuario['tipo_usuario']=='cliente'){
        header("location: ../../index.php");
      }else{
        header("location: despacho-pedidos.php");
      }

    }else{
      echo mensajes('Lo sentimos, el usuario o contraseña fue incorrecto','rojo');
    }

  }
}




 ?>
