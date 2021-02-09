<?php
  // include "../Modelo/productos.php";
  include "../Modelo/pedidos.php";

  $id_cliente=$_POST['txcliente'];
  $det_pedido=unserialize(urldecode($_POST['txarreglo'])) ;
  $cate=$_POST['txcate'];
  $prueba=str_replace(" ", "%20", $cate);


  $hoy=date("Y-m-d");


  $oPedido=new Pedido();
  $oInvent=new Producto();

  $oPedido->nuevoPedido($hoy,$id_cliente,"solicitado");

  $id_pedido=(int)$oPedido->consultaridPedido($id_cliente,"solicitado",$hoy);

  foreach ($det_pedido as $articulo) {
    $cantidad=$articulo['cantidad'];
    $id_prod=$articulo['id_producto'];
    $precio=$articulo['precio'];
    $talla=$articulo['talla'];
    $sub=$precio*$cantidad;

    $cantInvent=$oInvent->consultarInventario($id_prod,$talla);
    $nCant=$cantInvent['cantidad']-$cantidad;

   $oPedido->detallePedido($id_pedido,$cantidad,$id_prod,$precio,$sub,$talla);
   $oInvent->actualizarInventario($id_prod,$nCant,$talla);

  }
    include "control-eli-car.php";


?>
