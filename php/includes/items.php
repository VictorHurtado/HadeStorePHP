<?php
if (isset($_POST['stalla'])) {
  $talla=$_POST['stalla'];
  $cod=$_POST['cod'];
}else{
  $talla='';
}
 ?>

  <div class="articulo">
    <form  action="" method="post" style="  width: 166px;
      ">
    <input type="hidden" name="cod" id="cod_producto" value="<?php echo $product['id_producto']; ?>">
    <div class="imagen">
      <img src="../../img/Productos/<?php echo $product['imagen']; ?>">
    </div>
    <div class="titulo"><?php  echo $product['descripcion']; ?></div>
    <div class="precio">$<?php echo $product['precio']; ?>

      <select class="talla" name="stalla" onchange="this.form.submit()" style="width:80px;">

              <option <?php if($talla==''){echo 'selected';} ?>>Talla</option>
        <?php

          if($cate=='Zapatillas Mujer' || $cate=='Zapatillas Hombre'){
        ?>
          <option value="36" <?php if($talla=='36'){echo 'selected';} ?>>36</option>
          <option value="37"<?php if($talla=='37'){echo 'selected';} ?>>37</option>
          <option value="38"<?php if($talla=='38'){echo 'selected';} ?>>38</option>
          <option value="39"<?php if($talla=='39'){echo 'selected';} ?>>39</option>
          <option value="40"<?php if($talla=='40'){echo 'selected';} ?>>40</option>
          <option value="41"<?php if($talla=='41'){echo 'selected';} ?>>41</option>
          <option value="42"<?php if($talla=='42'){echo 'selected';} ?>>42</option>
          <option value="43"<?php if($talla=='43'){echo 'selected';} ?>>43</option>
      <?php  } elseif ($cate=='Ropa Mujer' && substr_count($product['descripcion'],'jean')==1){
        ?>
          <option value="4" <?php if($talla=='4'){echo 'selected';} ?>>4</option>
          <option value="6" <?php if($talla=='6'){echo 'selected';} ?>>6</option>
          <option value="8" <?php if($talla=='8'){echo 'selected';} ?>>8</option>
          <option value="10" <?php if($talla=='10'){echo 'selected';} ?>>10</option>
          <option value="12" <?php if($talla=='12'){echo 'selected';} ?>>12</option>
          <option value="14" <?php if($talla=='14'){echo 'selected';} ?>>14</option>

      <?php
    } elseif ($cate=='Ropa Hombre' && substr_count($product['descripcion'],'jean')==1){
        ?>
          <option value="28" <?php if($talla=='28'){echo 'selected';} ?>>28</option>
          <option value="30" <?php if($talla=='30'){echo 'selected';} ?>>30</option>
          <option value="32" <?php if($talla=='32'){echo 'selected';} ?>>32</option>
          <option value="34" <?php if($talla=='34'){echo 'selected';} ?>>34</option>
          <option value="36" <?php if($talla=='36'){echo 'selected';} ?>>36</option>
          <option value="38" <?php if($talla=='38'){echo 'selected';} ?>>38</option>

      <?php
    }else {
      ?>
        <option value="XS" <?php if($talla=='XS'){echo 'selected';} ?>>XS</option>
        <option value="S" <?php if($talla=='S'){echo 'selected';} ?>>S</option>
        <option value="M" <?php if($talla=='M'){echo 'selected';} ?>>M</option>
        <option value="L" <?php if($talla=='L'){echo 'selected';} ?>>L</option>
        <option value="XL" <?php if($talla=='XL'){echo 'selected';} ?>>XL</option>


    <?php
    }?>

      </select>
      </form>
    </div>



  <?php if($tipo=='cliente'){

  ?>
  <div class="botones">
      <a class="btn_catalogo" href="../Controlador/controlador-carrito.php?id=<?php echo $product['id_producto'];?>&cate=<?php echo $cate; ?>&talla=<?php echo $talla; ?>">Agregar al Carrito</a>
  </div>
  <?php
  }
  ?>
</div>
