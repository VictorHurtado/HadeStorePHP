<?php
session_start();
include_once "../includes/functions.php";
include "../Modelo/productos.php";
$user=$_SESSION['dni'];
$cantidad=0;
$id_producto=$_GET['id'];
$categoria=$_GET['cate'];
$talla=$_GET['talla'];

$oProducto=new Producto();
$invent=$oProducto->consultarInventario($id_producto,$talla);
if ($invent['cantidad']>0 ){


  $oNewCar= new Carrito();
  $items_car=$oNewCar->consultCar($user,$id_producto,$talla);
  foreach ($items_car as $item) {
    $cantidad=(int)$item['cant'];
    $idCar=(int)$item['id_car'];

  }

  if($cantidad==0){
    $cantidad++;
    if($invent['cantidad']<$cantidad){
      echo '<meta http-equiv="refresh" content="0;url=../Vista/catalogos.php?cate='.$categoria.'">';
      ?>
      <script type="text/javascript">
        alert("Producto no disponible");
      </script>

      <?php

    }else{
    $oNewCar->agregarItem($user,$id_producto,$cantidad,$talla);
    echo mensajes('se agrego el producto al carrito','verde');
  }
  }else{
    $cantidad++;
    if($invent['cantidad']<$cantidad){
      echo '<meta http-equiv="refresh" content="0;url=../Vista/catalogos.php?cate='.$categoria.'">';
      ?>
      <script type="text/javascript">
        alert("Cantidad no disponible");
      </script>

      <?php

    }else{
    $oNewCar->actuCar($idCar,$cantidad);
    }
  }

  echo '<meta http-equiv="refresh" content="0;url=../Vista/catalogos.php?cate='.$categoria.'">';
}else{
    echo '<meta http-equiv="refresh" content="0;url=../Vista/catalogos.php?cate='.$categoria.'">';
?>
<script type="text/javascript">
  alert("Talla no disponible");
</script>
<?php

}

?>
