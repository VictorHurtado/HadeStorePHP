<div class="articulo_carrito" style="width:150px; margin:20px;">
  <input type="hidden"  value="<?php echo $ropita['id_producto']; ?>">
  <input type="hidden"  value="<?php echo $ropita['id_carrito']; ?>">
  <div class="imagen">
    <img src="../../img/Productos/<?php echo $ropita['imagen']; ?>" >
  </div>
  <div class="titulo"><?php  echo $ropita['descripcion']; ?></div>
  <div class="precio">$<?php echo $ropita['precio']; ?></div>
  <div class="talla">Talla: <?php echo $ropita['talla']; ?></div>

  <div class=""><?php echo $ropita['cantidad']; ?></div>
  <?php if($tipo=='cliente'){
  ?>
  <div class="botones">
      <a class="btn_carrito" href="../Controlador/control-del-car.php?id=<?php echo $ropita['id_carrito'];?>&cate=<?php echo $cate; ?>&pro=<?php echo $ropita['id_producto']; ?>&cli=<?php echo $cliente ?>&talla=<?php echo $ropita['talla']; ?>">Quitar Item</a>
  </div>
  <?php
  }
  ?>
</div>
