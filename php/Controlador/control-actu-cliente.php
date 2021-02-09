<?php
if(isset($_POST['contrasena'])){
  if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['direccion'])&& !empty($_POST['telefono'])&& !empty($_POST['contrasena'])){
    $dni=$_SESSION['dni'];
    $contra=$_POST['contrasena'];

    if(password_verify($contra,$miCliente['clave'])){
      $newName=limpiar($_POST['nombre']);
      $newEmail=limpiar($_POST['correo']);
      $newDirection=limpiar($_POST['direccion']);
      $newTell=limpiar($_POST['telefono']);
      $oClientesito= new cliente();
      $oClientesito->actualizarInfo($dni,$newName,$newEmail,$newDirection,$newTell);
        echo '<meta http-equiv="refresh" content="0;url=../vista/actu-info-clientes.php">';
    }else{
      echo mensajes("Contraseña incorrecta,vuelva a intentarlo","rojo");
    }

  }


}










 ?>
