<?php
  include "../Modelo/productos.php";
  $oLista= new Producto();
  $productos=$oLista->ListaProductos();
  $long=count($productos);






 ?>
