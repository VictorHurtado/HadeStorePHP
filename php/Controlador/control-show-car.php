<?php
  include_once "../Modelo/productos.php";

  $oCarrito= new Carrito();
  $info_Carrito=$oCarrito->consultaCarrito($cliente);


  $oProducto=new Producto();
  $array=[];
    foreach ($info_Carrito as $prod) {

     $aux=$prod['id_carrito'];
     $id_prod=$prod['id_producto'];
     $cantidad=$prod['cantidad'];
     $talla=$prod['talla'];
     // $info_pro=$oProducto->getProducto($id_prod);
     // echo $info_pro['descripcion'];
     array_push($array,$oProducto->getProducto($id_prod,$aux,$cantidad,$talla));

   }



?>
