<?php //include "../Modelo/productos.php;"  ?>
<input type="text" name="txpro" value="" placeholder="Producto" list="pproduct" id="pro" class="col-12 col-s-12" style="width:99%;" autocomplete="off">
<datalist  id="product">
  <?php  $oLista=new Producto();
  $milista=$oLista->ListaProductos();

  $long=count($milista);
  for($j=0;$j<$long;$j++){


    ?>
      <option value="<?php echo $milista[$j]['id_producto'];  ?>"><?php echo $milista[$j]['descripcion']; ?></option>

    <?php
  }
  ?>
</datalist>
