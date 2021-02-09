
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Compras</title>
    <link type="text/css" rel="stylesheet" href="../../css/messages.css">
    <link href="../../css/estilo-menu.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../../css/main-tablas.css">
  </head>
  <body>
    <?php include "../menus/menu-Admin.php";?>
    <?php include "../Controlador/control-compras.php"; ?>
    <div class="row">
        <div class="col-12 col-s-12">
          <form class="col-12 col-s-12" action="" method="post">
              <div class="col-3 col-s-12">
                  <input type="number" name="txcant" value="" placeholder="Cantidad" id="can" class="col-12 col-s-12">
              </div>
              <div class="col-3 col-s-12">
                  <?php include "../includes/lista-productos.php"; ?>
              </div>
              <div class="col-2 col-s-12">
                  <input type="text" name="txtalla" value="" placeholder="Talla" id="talla" class="col-12 col-s-12">
              </div>
              <div class="col-3 col-s-9">
                  <input type="text" name="txprecio" value="" placeholder="Precio" id="val" class="col-12 col-s-12">
              </div>
              <div class="col-1 col-s-3">
                  <a name="agregar" onclick="Agrega()"> <i class="fa fa-plus-circle" style="font-size:50px;margin-left:25%;" class="col-12 col-s-12"></i>
                </a>
              </div>
              <div class="col-12 col-s-12">
                  <table id="tablaproductos" class="col-12 col-s-12">
                    <tr class="info">
                      <th>Cantidad</th>
                      <th>Producto</th>
                      <th>Talla</th>
                      <th>Valor</th>
                    </tr>
                  </table>


              </div>
              <div class="col-5 col-s-4" style="margin-top:10px;">
                Total a Pagar:
              </div>

              <div class="col-5 col-s-8">
                 <input type="text" name="tot" value="<?php echo "$tot"; ?>" id="tot" class="col-12 col-s-12" readonly>
                 <input type="hidden" name="obtener" id="obtener">
              </div>
              <div class="col-2 col-s-12">
                <input type="submit" name="" value="Registrar" class="col-12 col-s-12">
              </div>
          </form>
          <script  src="../../js/ventas.js"></script>
          <script src="../../js/jquery.js"></script>
          <script src="../../js/main.js"></script>
          <script src="../../js/filtro.js"></script>
        </div>
    </div>
  </body>
</html>
