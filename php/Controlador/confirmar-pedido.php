<?php
include "../includes/php_conexion.php";
include "../Modelo/pedidos.php";
$hoy= date('Y-m-d');
$id_pedido=$_GET['id_pedido'];
$estado="confirmado";
$oConfirmar= new Pedido();
$oIngreso=new Ingreso();
$oConfirmar->actualizarPedido($id_pedido,$hoy,$estado);
$total=$oConfirmar->consultarValor($id_pedido);
var_dump($total);
$oIngreso->crearIngreso($id_pedido,$hoy,$total['total']);



echo '<meta http-equiv="refresh" content="0;url=../Vista/despacho-pedidos.php">';









 ?>
