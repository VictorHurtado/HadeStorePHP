<?php
  include_once "../Modelo/clientes.php";
  if(!empty($_POST['nombre'])&&!empty($_POST['dni'])&&!empty($_POST['correo'])&&!empty($_POST['direccion'])&&!empty($_POST['telefono'])&&!empty($_POST['fecha_nac'])&&!empty($_POST['fecha_ingre_empre'])){
    $nombre=limpiar($_POST['nombre']);
    $dni=(int)limpiar($_POST['dni']);
    $correo=limpiar($_POST['correo']);
    $direccion=limpiar($_POST['direccion']);
    $telefono=(int)(limpiar($_POST['telefono']));
    $fecha_naci=limpiar($_POST['fecha_nac']);
    $fecha_ingre=limpiar($_POST['fecha_ingre_empre']);

    $clave=password_hash($dni, PASSWORD_DEFAULT);

    $empleado= new cliente();
    $zComprobar=$empleado->getEmpleado($dni);
    if((int)$zComprobar['dni']!=$dni){
      $empleado->nuevoEmpleado($nombre,$dni,$telefono,$correo,$direccion,$fecha_naci,$fecha_ingre);
      $empleado->nuevoUsuario($dni,$clave,$nombre,"Administrador");
      echo mensajes('Empleado registrado con &eacute;xito','verde');
    }else{
      echo mensajes('El Empleado ya existe!','error');
    }


  }


?>