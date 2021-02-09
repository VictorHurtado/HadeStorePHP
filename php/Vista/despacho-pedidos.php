
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Despachos</title>
    <link type="text/css" rel="stylesheet" href="../../css/messages.css">
    <link href="../../css/estilo-menu.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <link rel="stylesheet" href="../../css/main-tablas.css">
  </head>
  <body>
      <?php  include "../menus/menu-Admin.php";?>
    <div class="row">
      <div class="col-12 col-s-12">
        <h1>Despachos</h1>

      </div>
      <div class="col-12 col-s-12">

        <table class="col-12 col-s-12">
          <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Tel&eacute;fono</th>
            <th>Fecha Pedido</th>
            <th>Acciones</th>
          </tr>
        <?php include "../Controlador/control-despachos.php";?>
        </table>
        <div class="col-4 col-s-8 deactive " id="modal_cliente" >

            <h2>CLIENTE</h2>
            <p id="Nombre" style="border-top-left-radius:10px;border-top-right-radius: 10px;">Nombre:</p>
            <p id="Cedula">Cedula:</p>
            <p id="Telefono">Telefono: </p>
            <p id="Correo">Correo:</p>
            <p id="Direccion"  style="border-bottom-left-radius:10px;border-bottom-right-radius: 10px;">Direccion: </p>
        </div>
      </div>
    </div>
    <script src="../../js/view_car.js">  </script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/filtro.js"></script>
  </body>
</html>
