<?php include "../includes/php_conexion.php"; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Historial-Pedidos</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link type="text/css" rel="stylesheet" href="../../css/messages.css">
    <link href="../../css/estilo-menu.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/pedidos.css">
    <link rel="stylesheet" href="../../css/main-tablas.css">

  </head>
  <body>
    <div class="row">
      <?php include "../menus/menu_index.php"; ?>
      <div class="titulo col-12 col-s-12">
        <h1>Historial de Pedidos</h1>
      </div>

      <div class="pedidos col-12 col-s-12">


            <?php include "../Controlador/control-historial.php"; ?>

      </div>
      <div class="col-12 col-s-12 "style="display:flex; flex-direction:row; justify-content: center;">

      </div>
    </div>
    <script src="../../js/view_car.js"></script>
  </body>


</html>
