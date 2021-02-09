<?php
include_once "../includes/functions.php";
include "../Modelo/productos.php";
include "../Modelo/pedidos.php";

$id_pedido=$_GET['id_pedido'];

$oCancelar= new Pedido();
$oActualizar=new Producto();


$detalles=$oCancelar->consultarDetalle($id_pedido);
foreach ($detalles as $ped) {
  $cantidad=$ped['cantidad'];
  $id_prod=$ped['id_producto'];
  $tallita=$ped['talla'];
  $stock=$oActualizar->consultarInventario($id_prod,$tallita);
  $cantN=$stock['cantidad']+$cantidad;
  $oActualizar->actualizarInventario($id_prod,$cantN,$tallita);


}
  $oCancelar->eliminarPedido($id_pedido);
  $oCancelar->eliminarDetalle($id_pedido);




 echo '<meta http-equiv="refresh" content="0;url=../Vista/despacho-pedidos.php">';









 ?>
