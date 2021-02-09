<?php
include "../Modelo/productos.php";
$hoy=date('Y-m-d');
$tot=0;
if(!empty($_POST['obtener'])){
  $can=$_POST['txcant'];
  $pro=$_POST['txpro'];
  $val=$_POST['txprecio'];
  $tot=$_POST['tot'];
  $talla=$_POST['txtalla'];
  $obtener=$_POST['obtener'];
  $convertir=json_decode($obtener,true);
  $concepto="compra mercancia";
  $longitud=count($convertir);
  $oProducto=new Producto();

  for ($i=0; $i<$longitud ;$i++){
    $cantidad=$convertir[$i]['cantidades'];
    $producto=$convertir[$i]['productos'];
    $valores=$convertir[$i]['valores'];
    $tallas=$convertir[$i]['tallas'];
    $subtotales=$convertir[$i]['subtotales'];
    $totales=$convertir[$i]['total'];
    $productoConsult=$oProducto->consultarInventario($producto,$tallas);
    if($productoConsult['id_producto']==$producto && $productoConsult['talla']==$tallas){
      $cantidad=$cantidad+$productoConsult['cantidad'];
      $oProducto->actualizarInventario($producto,$cantidad,$tallas);

    }else{
      $oProducto->insertProductInventario($producto,$cantidad,$tallas);

    }

  }
  $oProducto->crearEgreso($concepto, $hoy, $tot,$_SESSION['nombre']);

}







 ?>
