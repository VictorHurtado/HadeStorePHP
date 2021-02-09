<?php include "../Modelo/pedidos.php";
      include "../includes/php_conexion.php";
  $oPedidos= new Pedido();
  $estado="solicitado";
  $arrayPedidos=$oPedidos->consultarPedidos($estado);

  $cont=0;
?>

  <?php foreach ($arrayPedidos as $ped) {

      ?>

      <tr>
        <td><?php echo $ped['id_pedido']; ?></td>
        <td> <a href="#" id="<?php echo $cont ?>"onclick="infocliente('<?php echo $cont; ?>','modal_cliente','<?php echo $ped['id_Clientes'];?>','<?php echo $ped['nombreC']; ?>','<?php echo $ped['tel']; ?>','<?php echo $ped['correo']; ?>','<?php echo $ped['direccion']; ?>')">

        <?php echo $ped['nombreC']; ?></a></td>

        <td><?php echo $ped['tel']; ?></td>
        <td><?php echo $ped['fecha_pedido']; ?></td>
        <td>
          <a href="../Controlador/confirmar-pedido.php?id_pedido=<?php echo $ped['id_pedido']; ?>"><i class="fas fa-check-circle" title="Despachar Pedido"></i></a>
          <a href="../Controlador/cancelar-pedido.php?id_pedido=<?php echo $ped['id_pedido']; ?>"><i class="fas fa-ban" title="Cancelar Pedido"></i></a>
        </td>
      </tr>

    <?php
    $cont++;
  } ?>
