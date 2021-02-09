<?php
include '../includes/php_conexion.php';
/**
 *
 */
class Producto{
  var $id_carrito;
  var $id_producto;
  var $descripcion;
  var $precio;
  var $categoria;
  var $imagen;
  var $minimo;
  var $cantidad;
  var $talla;
  var $cliente;

  function __construct()
  {

  }


  /// INVENTARIOS

    function crearEgreso($concepto, $fecha, $valor,$cliente){
        global $conexion;
        mysqli_query($conexion,"INSERT INTO Egresos(fecha,concepto,valor,usuario) values('$fecha','$concepto','$valor','$cliente') ");
    }

  function actualizarInventario($id_producto,$cantidad,$talla){
    global $conexion;
    mysqli_query($conexion,"UPDATE inventario set cantidad='$cantidad' where id_producto= '$id_producto' and talla = '$talla'");
  }
  function EliInventario($id_producto){
    global $conexion;
    mysqli_query($conexion,"DELETE FROM inventario where id_producto= '$id_producto'");
  }
  function insertProductInventario($id_producto,$cantidad,$talla){
    global $conexion;
    mysqli_query($conexion,"INSERT INTO inventario(id_producto,cantidad,talla)values('$id_producto','$cantidad','$talla')");
  }
  function consultarInventario($id_producto,$talla){
    global $conexion;
    $pa=mysqli_query($conexion,"SELECT * FROM inventario where id_producto = '$id_producto' and talla= '$talla'");

            if($row=mysqli_fetch_array($pa)){
                return [
             'id_producto'  => $row['id_producto'],
             'cantidad'  => $row['cantidad'],
             'talla'       => $row['talla'],
                ];
            }
  }
  function contador(){
    global $conexion;
    $cantidad =mysqli_query($conexion,"SELECT * FROM inventario where 1");
    return mysqli_num_rows($cantidad);
  }
  function getInventario($inicio,$fin){
    global $conexion;
    $pa=mysqli_query($conexion,"SELECT inventario.*,producto.descripcion FROM inventario,producto where inventario.id_producto = producto.id_producto order by inventario.id_producto desc LIMIT $inicio,$fin");
     $productos=[];
     while(  $row = mysqli_fetch_array($pa)){
       $prod=[
         'id_producto'         => $row['id_producto'],
         'cantidad'         => $row['cantidad'],
         'talla'              => $row['talla'],
         'nombreP' =>$row['descripcion'],

       ];
       array_push($productos,$prod);
     }
     return $productos;
   }

  //PRODUCTOS
  function nuevoProducto($descripcion,$precio, $categoria,$imagen,$minimo){
    global $conexion;
     mysqli_query($conexion,"INSERT INTO producto(descripcion,precio,categoria,imagen,Stop_minimo) values ('$descripcion','$precio','$categoria','$imagen','$minimo')");
  }
    function consultarProducto($descripcion){
        global $conexion;
        $pa=mysqli_query($conexion, "SELECT * from producto where descripcion = '$descripcion'");

        if($row=mysqli_fetch_array($pa)){
            return [

         'id_producto'  => $row['id_producto'],
         'descripcion'  => $row['descripcion'],
         'precio'       => $row['precio'],
         'categoria'    => $row['categoria'],
         'imagen'       => $row['imagen'],
         'Stop_minimo'  => $row['Stop_minimo'],

            ];
        }
    }
    function getProducto($id_producto,$id_carrito,$cantidad,$talla){
        global $conexion;
        $pa=mysqli_query($conexion, "SELECT * from producto where id_producto = '$id_producto'");

        if($row=mysqli_fetch_array($pa)){
            return [

         'id_producto'  => $row['id_producto'],
         'descripcion'  => $row['descripcion'],
         'precio'       => $row['precio'],
         'categoria'    => $row['categoria'],
         'imagen'       => $row['imagen'],
         'Stop_minimo'  => $row['Stop_minimo'],
         'id_carrito' =>$id_carrito,
         'cantidad' => $cantidad,
         'talla'=> $talla,
            ];
        }
    }
   function getProductosPorCategoria($category){
     global $conexion;
     $pa=mysqli_query($conexion, "SELECT * from producto where  categoria = '$category' and producto.id_producto in (SELECT distinct id_producto From inventario)");//sentencia

     $productos=[];
     while(  $row = mysqli_fetch_array($pa)){
       $prod=[
         'id_producto'         => $row['id_producto'],
         'descripcion'         => $row['descripcion'],
         'precio'              => $row['precio'],
         'categoria'           => $row['categoria'],
         'imagen'              => $row['imagen'],
         'stop_minimo'         => $row['Stop_minimo'],
       ];
       array_push($productos,$prod);
     }
     return $productos;
   }
   function ListaProductos(){
     global $conexion;
     $pa= mysqli_query($conexion,"SELECT * FROM producto order by descripcion");
     $productos=[];
     while(  $row = mysqli_fetch_array($pa)){
       $prod=[
         'id_producto'         => $row['id_producto'],
         'descripcion'         => $row['descripcion'],
       ];
       array_push($productos,$prod);
     }
      return $productos;
   }
   function actualizarProducto($id_producto,$precio,$minimo){
     global $conexion;
     mysqli_query($conexion,"UPDATE producto SET precio='$precio',Stop_minimo='$minimo' WHERE id_producto='$id_producto'");
   }
   function eliminarProdu($id_producto){
    global $conexion;
    mysqli_query($conexion,"DELETE FROM producto where id_producto='$id_producto'");
  }

}
class Carrito{

  var $id_carrito;
  var $id_Clientes;
  var $id_producto;
  var $cantidad;
  var $talla;

  function __construct(){

  }
  function agregarItem($id_Clientes,$id_producto,$cantidad,$talla){
    global $conexion;
    mysqli_query($conexion,"INSERT INTO carrito (id_Clientes,id_producto,cantidad,talla) values ('$id_Clientes','$id_producto','$cantidad', '$talla')");
  }
  function consultCar($id_clientes,$id_producto,$talla){
    global $conexion;
    $pa=mysqli_query($conexion, "SELECT * from carrito where id_Clientes = '$id_clientes' and id_producto='$id_producto' and talla='$talla' ");//sentencia

    $ropu=[];
    while(  $row = mysqli_fetch_array($pa)){
      $rup=[
        'id_prod'         => $row['id_producto'],
        'id_car'         => $row['id_carrito'],
        'cant'            => $row['cantidad'],

      ];
      array_push($ropu,$rup);
    }
    return $ropu;
  }
  function consultaCarrito($id_clientes){
    global $conexion;
    $pa=mysqli_query($conexion, "SELECT * from carrito where id_Clientes = '$id_clientes'");//sentencia

    $ropa=[];
    while(  $row = mysqli_fetch_array($pa)){
      $rop=[
        'id_producto'         => $row['id_producto'],
        'id_carrito'         => $row['id_carrito'],
        'cantidad' => $row['cantidad'],
        'talla' => $row['talla'],

      ];
      array_push($ropa,$rop);
    }
    return $ropa;
  }
  function del_item($id_carrito){
    global $conexion;
    mysqli_query($conexion,"DELETE FROM carrito WHERE id_carrito='$id_carrito'");
  }
  function actuCar($id_carrito,$cantidad){
    global $conexion;
    mysqli_query($conexion,"UPDATE carrito SET cantidad='$cantidad' WHERE id_carrito='$id_carrito'");
  }
  function eliminarCar($id_Clientes){
    global $conexion;
    mysqli_query($conexion,"DELETE FROM carrito WHERE id_Clientes='$id_Clientes'");
  }


}

?>
