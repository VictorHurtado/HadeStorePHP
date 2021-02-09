
<?php
  include "../Modelo/clientes.php";
  if(!empty($_SESSION['dni'])){
    if(!empty($_POST['dni']) && !empty($_POST['contrasena'] )&& !empty($_POST['contrasena2'])){
      $dni=limpiar($_POST['dni']);
      $contra1=limpiar($_POST['contrasena']);
      $contra2=limpiar($_POST['contrasena2']);
        if($_SESSION['dni'] == $dni && $contra1 == $contra2){


          $oUsuario=new Cliente();
          $usuario=$oUsuario->getUsuario($dni);
          if(password_verify($contra1,$usuario['contrasena'])){
            $oUsuario->eliminarCuenta($usuario['dni']);
            include "../includes/cerrarSesion.php";

          }
        }else{
          echo mensajes("Campos Incorrectos! verifique su informacion y vuelva a intentarlo","rojo");
        }



    }


  }else{
    header("location:../Vista/login.php");
  }

 ?>
