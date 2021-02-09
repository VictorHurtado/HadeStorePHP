<?php
  include "../Modelo/pedidos.php";
  if(!empty($_SESSION['dni'])){
    $id_cliente=$_SESSION['dni'];
    $oPedidos= new Pedido();
    //paginador

    $pedidos=$oPedidos->consultarPed_Cliente($id_cliente);
    $cont=1;
      foreach ($pedidos as $ped) {
        $id=$ped['id_pedido'];
    ?>
<div class="ped col-12 col-s-12">
          <div class="contenedor">
              Codigo del pedido:
              <?php echo $ped['id_pedido']; ?>
          </div>

          <div class="contenedor">
            Estado:
            <?php if($ped['estado']=='confirmado'){
                  echo '<i class="fas fa-check-circle"></i>';
            }else{
                echo '<i class="fas fa-hourglass-start"></i>';
            } ?>
          </div>
          <div class="contenedor">
            Fecha del Pedido:
            <?php echo $ped['fecha_pedido']; ?>
          </div>
          <div class="contenedor icon">
            <a href="#" onclick=" mostrardetallePedido('<?php echo $id; ?>')"><i class="fas fa-caret-down"></i></a>
          </div>
</div>
    <?php $detalles=$oPedidos->consultarDetalle($ped['id_pedido']);

     ?>
          <div class="col-12 col-s-12 caja_detalle" style="margin-top: -15px;" id="<?php echo $ped['id_pedido']; ?>" >
            <table class="col-12 col-s-12">
              <th>descripcion</th>
              <th>talla</th>
              <th>cantidad</th>
              <th>valor unitario</th>
              <th>subtotal</th>
              <?php foreach ($detalles as $det) {
                ?>
                <tr>
                  <td><?php echo $det['descripcion']; ?></td>
                  <td><?php echo $det['talla']; ?></td>
                  <td><?php echo $det['cantidad']; ?></td>
                  <td><?php echo $det['valor_unitario']; ?></td>
                  <td><?php echo $det['subtotal']; ?></td>
                </tr>

                <?php
              } ?>

            </table>
          </div>

    <?php

      }

  }






 ?>
