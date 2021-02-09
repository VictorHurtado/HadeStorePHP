<?php
  $id_car=$_GET['id'];
  $categoria=$_GET['cate'];
  $id_producto=$_GET['pro'];
  $cliente=$_GET['cli'];
  $talla=$_GET['talla'];
  include "../Modelo/productos.php";

  $oEliminar=new Carrito();
  $items_car=$oEliminar->consultCar($cliente,$id_producto,$talla);
  foreach ($items_car as $item) {
    $cantidad=(int)$item['cant'];
    $id_car=(int)$item['id_car'];

  }
  if($cantidad==1){
    $oEliminar->del_item($id_car);

  }else{
    $cantidad=$cantidad-1;

    $oEliminar->actuCar($id_car,$cantidad);

  }

echo '<meta http-equiv="refresh" content="0;url=../Vista/catalogos.php?cate='.$categoria.'">';




 ?>
