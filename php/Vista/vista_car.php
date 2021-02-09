
<div class="col-12 col-s-12 view_car">

  <?php
    $total=0;
    include_once "../Controlador/control-show-car.php";
    foreach ($array as $ropita ) {
      $precio=$ropita['precio'];
      $cant=$ropita['cantidad'];
      $talla=$ropita['talla'];
      $sub= $precio*$cant;
      $total=$total+$sub;
      include "../includes/items_carrito.php";
    }
    $vector = urlencode(serialize($array));

  ?>
  <form class="form_car" action="" method="post">
    <input type="hidden" name="txcate" value="<?php echo $cate; ?>">
    <input type="hidden" name="txarreglo" value="<?php echo $vector;?>">
    <input type="hidden" name="txcliente" value="<?php echo $cliente; ?>">
    <label for="">Total a pagar: &#36;<?php echo $total; ?></label> <br>
    <div class="check_confirm">
        <input type="checkbox" name="txconfirmar" value="1" id="confirmar"><label for="txconfirmar">acepta los terminos del pedido</label>
    </div>

    <input type="submit" name="generar" value="Confirmar Pedido"class="btn_carrito">
  </form>
<?php

  if ($_POST['txconfirmar']==1) {

    include_once "../Controlador/control-add-pedido.php";

  }


 ?>
</div>
