<?php
  include_once "../includes/php_conexion.php";
  class cliente{
    var $nombre;
    var $dni;
    var $contrasena;
    var $telefono;
    var $correo;
    var $direccion;
    var $fecha_naci;
    var $fecha_ingre_emple;
    public function __construct(){

    }
//ingresa un nuevo cliente recibiendo cada uno de los datos del cliente
    public function nuevoCliente($nombre,$dni,$telefono,$correo,$direccion){
        global $conexion;
        mysqli_query($conexion,"INSERT INTO cliente(id_Clientes,nombre, telefono, correo, direccion) values ('$dni' ,'$nombre', '$telefono','$correo','$direccion')");

    }
//Registra un nuevo empleado recibiendo toda la informacion del empleado
    public function nuevoEmpleado($nombre,$dni,$correo,$telefono,$direccion,$fecha_naci,$fecha_ingre_emple){
      global $conexion;
      mysqli_query($conexion,"INSERT INTO administrador(id_admin,nombre,correo,direccion,telefono,fechanac,fecha_ingre) values ('$dni','$nombre','$correo','$telefono','$direccion','$fecha_naci','$fecha_ingre_emple')");
    }

    public function nuevoUsuario($dni,$contra_hash,$nombre,$tipo_usuario){
      global $conexion;
      mysqli_query($conexion,"INSERT INTO usuarios (id_user,clave,nombre,tipo_usuario) values ('$dni','$contra_hash','$nombre','$tipo_usuario')");
    }

    public function getUsuario($dni){
      global $conexion;
      $pa=mysqli_query($conexion, "SELECT * from usuarios where id_user = '$dni'");
        if($row = mysqli_fetch_array($pa)){
          return [
            'dni' => $row['id_user'],
            'nombre' => $row['nombre'],
            'contrasena' =>$row['clave'],
            'tipo_usuario' =>$row['tipo_usuario'],


          ];
        }
    }

    public function getEmpleado($dni){
      global $conexion;
      $em=mysqli_query($conexion, "SELECT * from usuarios where id_user = '$dni'");
      if($row = mysqli_fetch_array($em)){
        return[
        'dni' => $row['id_user'],
        'nombre' => $row['nombre'],
        'contrasena' =>$row['clave'],
        'tipo_usuario' =>$row['tipo_usuario'],

        ];
      }
    }
    public function getCliente($dni){
      global $conexion;
      $pa= mysqli_query($conexion,"SELECT cliente.*,usuarios.clave FROM cliente,usuarios where cliente.id_Clientes=usuarios.id_user and cliente.id_Clientes=$dni");
      if($row = mysqli_fetch_array($pa)){
        return[
          'id_Clientes'=> $row['id_Clientes'],
          'nombre' => $row['nombre'],
          'telefono'  =>$row['telefono'],
          'correo' => $row['correo'],
          'direccion' => $row['direccion'],
          'clave'=>$row['clave']
        ];
      }
    }
    public function actualizarInfo($dni,$nombre,$correo,$direccion,$telefono){
      global $conexion;
      mysqli_query($conexion,"UPDATE cliente set nombre ='$nombre', correo='$correo', direccion='$direccion', telefono='$telefono' where id_Clientes ='$dni'");
    }

    public function modificarClave($dni,$contrasena){
      global $conexion;
      mysqli_query($conexion,"UPDATE usuarios set clave ='$contrasena' where id_user ='$dni'");
    }
    public function eliminarCuenta($dni){
      global $conexion;
      mysqli_query($conexion,"DELETE FROM usuarios where id_user ='$dni'");

    }

  }











 ?>
