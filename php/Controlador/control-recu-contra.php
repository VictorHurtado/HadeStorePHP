<?php
  include_once "../Modelo/clientes.php";
  include_once "../includes/aleatorio.php";

  if(!empty($_POST['nombre'])&&!empty($_POST['dni'])&&!empty($_POST['direccion'])&&!empty($_POST['telefono'])&&!empty($_POST['correo'])){
    $nombre=limpiar($_POST['nombre']);
    $dni=(int)limpiar($_POST['dni']);
    $direccion=limpiar($_POST['direccion']);
    $telefono=(int)(limpiar($_POST['telefono']));
    $correo=limpiar($_POST['correo']);
    $asunto="Recuperaci&oacute;n de contrase&ntilde;a";
    $clave=generateRandomString();
    $mensaje="Estimado $nombre <br> Hemos recibido solicitud de recuperaci&oacute;n de contrase&ntilde;a. Para acceder a tu cuenta utiliza la siguiente informaci&oacute;n:<br>
    <h1>Usuario: $dni </h1>
    <h1>Clave: $clave </h1>
    Una vez ingrese a su cuenta, le recomendamos cambiar su contrase&ntilde;a <br> Atentamente Soporte T&eacute;cnico.";
    $cabecera="From: hadestore26@gmail.com";
    $contra_hash=password_hash($clave, PASSWORD_DEFAULT);

    echo $clave;

    $oRecu= new cliente();
    $oRecu->modificarClave($dni,$contra_hash);

    //mail($correo,$asunto,$mensaje,$cabecera);

    //echo '<meta http-equiv="refresh" content="0;url=http://localhost/original/php/vista/login.php">';
  }
?>