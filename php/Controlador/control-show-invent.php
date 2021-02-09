<?php
include "../Modelo/productos.php";
  $oProductos=new Producto();


  $cant=$oProductos->contador();
  $val=5;
  $nPag= $cant/$val;

  if(isset($_GET['pag'])){
    $pag=$_GET['pag'];
  }else{
    $pag=1;

  }

  $inicio=($pag-1)*$val;



$productos=$oProductos->getInventario($inicio,$val);
  foreach ($productos as $prod) {
?>
    <tr>
      <td><?php echo $prod['id_producto']; ?></td>
      <td><?php echo $prod['nombreP']; ?></td>
      <td><?php echo $prod['cantidad']; ?></td>
      <td><?php echo $prod['talla']; ?></td>

    </tr>
    
<?php
  }
 ?>
