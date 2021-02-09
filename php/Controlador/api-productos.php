<?php
include_once '../modelo/productos.php';


if(isset($_GET['categoria'])){
  $categoria=$_GET['categoria'];
  if($categoria == ''){
    echo json_encode(['statuscode'=>400,'response'=> 'no existe esa categoria']);
  }else{
    $productos=new Producto();
    $items=$productos->getProductosPorCategoria($categoria);
    echo json_encode(['statuscode'=>200,'items' => $items]);
  }

}else{
  echo json_encode(['statuscode'=>400,'response'=> 'no hay accion']);
}

?>
