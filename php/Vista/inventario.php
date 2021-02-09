<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inventario</title>
    <link type="text/css" rel="stylesheet" href="../../css/messages.css">
    <link href="../../css/estilo-menu.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../../css/main-tablas.css">
  </head>
  <body>

    <?php

    include "../menus/menu-Admin.php";?>

    <div class="row" >
        <div class="col-12 col-s-12">
            <h1>Inventario</h1>
        </div>
        <div class="col-12 col-s-12">
          <table class="col-12 col-s-12">
            <th>codigo</th>
            <th>descripcion</th>
            <th>cantidad</th>
            <th>talla</th>
            <?php include "../Controlador/control-show-invent.php"; ?>
          </table>
          <div class="col-12 col-s-12 "style="display:flex; flex-direction:row; justify-content: center;">
            <?php
              for($i=1;$i<$nPag+1;$i++){
              ?>
              <a class="paginas" href="inventario.php?pag=<?php echo $i; ?>"><?php echo $i; ?></a>
              <?php
            }
          ?>
          </div>
        </div>
    </div>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/filtro.js"></script>
  </body>
</html>
