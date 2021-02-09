<?php
//  include "../Modelo/productos.php";

  $oEliminarCar=new Carrito();
  $oEliminarCar->eliminarCar($id_cliente);
  echo '<meta http-equiv="refresh" content="0;url=../Vista/catalogos.php?cate='.$prueba.'">';


 ?>
