
<?php
//include '../includes/php_conexion.php';
/**
 *
 */
class Pedido{
  var $fecha_inicio;
  var $fecha_entrega;
  var $id_cliente;
  var $estado;
  var $entrega;
  var $id_pedido;
  var $valuni;
  var $canti;
  var $id_pro;
  var $subtotal;
  var $talla;


  function __construct()
  {

  }

  function nuevoPedido($fecha,$id_cliente,$estado){
    global $conexion;
     mysqli_query($conexion,"INSERT INTO pedido(id_Clientes,estado,fecha_pedido) values ('$id_cliente','$estado','$fecha')");
  }
  function detallePedido($id_pedido,$canti,$id_pro,$valuni,$subtotal,$talla){
    global $conexion;

     mysqli_query($conexion,"INSERT INTO detalle_pedido(id_pedido, cantidad, id_producto, valor_unitario, subtotal,talla) VALUES ('$id_pedido','$canti','$id_pro','$valuni','$subtotal','$talla')");
  }

    function consultaridPedido($id_cliente,$estado,$fecha){
        global $conexion;
        $pa=mysqli_query($conexion, "SELECT * from pedido where id_Clientes = '$id_cliente' and fecha_pedido='$fecha' and estado= '$estado'");
        $row= mysqli_fetch_array($pa);
        $id=$row['id_pedido'];
          return $id;
    }
    function consultarPedidos($estado){
      global $conexion;
      $pa=mysqli_query($conexion,"SELECT pedido.*,cliente.* FROM pedido,cliente where pedido.id_Clientes=cliente.id_Clientes and estado='$estado' order by fecha_pedido ");
      $pedidos=[];
      while(  $row = mysqli_fetch_array($pa)){
        $ped=[
          'id_pedido'         => $row['id_pedido'],
          'id_Clientes'         => $row['id_Clientes'],
          'estado'              => $row['estado'],
          'fecha_pedido'           => $row['fecha_pedido'],
          'nombreC'              => $row['nombre'],
          'tel' => $row['telefono'],
          'correo' => $row['correo'],
          'direccion'=>$row['direccion'],
        ];
        array_push($pedidos,$ped);
    }
    return $pedidos;
  }
  function actualizarPedido($id_pedido,$fecha_entrega,$estado){
    global $conexion;
      mysqli_query($conexion,"UPDATE pedido SET estado='$estado',fecha_entrega='$fecha_entrega' where id_pedido='$id_pedido'");
  }
  function consultarValor($id_pedido){
    global $conexion;
    $pa = mysqli_query($conexion,"SELECT sum(subtotal) as total from detalle_pedido where id_pedido = '$id_pedido'");
    $total=mysqli_fetch_array($pa);
    return $total;
  }
  function consultarPed_Cliente($id_cliente){
    global $conexion;
    $pa=mysqli_query($conexion,"SELECT * FROM pedido where id_Clientes=$id_cliente order by fecha_pedido");
    $pedidos=[];
    while(  $row = mysqli_fetch_array($pa)){
      $ped=[
        'id_pedido'         => $row['id_pedido'],
        'id_Clientes'         => $row['id_Clientes'],
        'estado'              => $row['estado'],
        'fecha_pedido'           => $row['fecha_pedido'],

      ];
      array_push($pedidos,$ped);
  }
  return $pedidos;
  }
  function consultarDetalle($id_pedido){
    global $conexion;
    $pa =mysqli_query($conexion,"SELECT detalle_pedido.*,producto.descripcion FROM detalle_pedido,producto where detalle_pedido.id_producto=producto.id_producto and detalle_pedido.id_pedido='$id_pedido'");
    $detalles_pedidos=[];
    while(  $row = mysqli_fetch_array($pa)){
      $ped=[
        'id_pedido'         => $row['id_pedido'],
        'cantidad'         => $row['cantidad'],
        'id_producto'              => $row['id_producto'],
        'valor_unitario'           => $row['valor_unitario'],
        'subtotal'              => $row['subtotal'],
        'talla' => $row['talla'],
        'descripcion' => $row['descripcion'],
      ];
      array_push($detalles_pedidos,$ped);
  }


  return $detalles_pedidos;
  }

  function contador($id_cliente){
    global $conexion;
    $cantidad = mysqli_query($conexion,"SELECT * FROM pedido where id_Clientes='$id_cliente'");
    return mysqli_num_rows($cantidad);
  }

  function eliminarPedido($id_pedido){
    global $conexion;
    mysqli_query($conexion,"DELETE FROM pedido WHERE id_pedido='$id_pedido'");
  }
  function eliminarDetalle($id_pedido){
    global $conexion;
    mysqli_query($conexion,"DELETE FROM detalle_pedido WHERE id_pedido= '$id_pedido'");
  }

}

class Ingreso{
  var	$id;
  var $fecha;
  var $concepto;
  var $valor;
  var $mes;
  var $anio;


  function __construct(){
  }
  function crearIngreso($concepto, $fecha, $valor){
      global $conexion;
      mysqli_query($conexion,"INSERT INTO ingresos(fecha,concepto,valor) values('$fecha','$concepto','$valor') ");
  }

  function consulIngresos($mes,$anio){
    global $conexion;
    $pe=mysqli_query($conexion,"SELECT fecha,sum(valor) as total from ingresos where month(fecha)='$mes' and year(fecha)='$anio' group by fecha");
    $detalles_inp=[];
    while($row = mysqli_fetch_array($pe)){
      $ing=[
        'fecha'         => $row['fecha'],
        'valt'          => $row['total'],
      ];
      array_push($detalles_inp,$ing);
  }
  return $detalles_inp;
  }

  function consulEgresos($mes,$anio){
    global $conexion;
    $pu=mysqli_query($conexion,"SELECT fecha,sum(valor) as total from egresos where month(fecha)='$mes' and year(fecha)='$anio' group by fecha");
    $detalles_egre=[];
    while($row = mysqli_fetch_array($pu)){
      $eg=[
        'fecha'         => $row['fecha'],
        'volt'          => $row['total'],
      ];
      array_push($detalles_egre,$eg);
    }
    return $detalles_egre;
  }

}
 ?>
