<?php
  include_once "../Modelo/clientes.php";
  if(!empty($_POST['nombre'])&&!empty($_POST['dni'])&&!empty($_POST['contrasena'])&&!empty($_POST['direccion'])&&!empty($_POST['telefono'])&&!empty($_POST['correo'])){
    $nombre=limpiar($_POST['nombre']);
    $dni=(int)limpiar($_POST['dni']);
    $contrasena=limpiar($_POST['contrasena']);
    $direccion=limpiar($_POST['direccion']);
    $telefono=(int)(limpiar($_POST['telefono']));
    $correo=limpiar($_POST['correo']);
    $contra_hash=password_hash($contrasena, PASSWORD_DEFAULT);
    $cliente= new cliente();
    $aComprobar=$cliente->getUsuario($dni);
    if((int)$aComprobar['dni']!=$dni){
      $cliente->nuevoCliente($nombre,$dni,$telefono,$correo,$direccion);
      $cliente->nuevoUsuario($dni,$contra_hash,$nombre,"cliente");
      echo mensajes('usuario registrado con exito','verde');
    }else{
      echo mensajes('El usuario ya existe!','error');
    }


  }





 ?>
