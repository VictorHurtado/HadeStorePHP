<?php

if(!empty($_POST['idpro'])&& !empty($_POST['valor']) && !empty($_POST['stop'])){

  $id_prod=$_POST['idpro'];
  $val=$_POST['valor'];
  $minimo=$_POST['stop'];

  $oProducto=new Producto();
  $oProducto->actualizarProducto($id_prod,$val,$minimo);
}





 ?>
