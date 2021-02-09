<?php

	include_once "../includes/php_conexion.php";
	include_once "../includes/functions.php";
	include_once "../menus/menu_index.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Eliminar Cuenta</title>
	<link type="text/css" rel="stylesheet" href="../../css/messages.css">
	<link href="../../css/estilo-menu.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/formulario-regi.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  </head>

  <body>


<div class="row" >
<div class="col-6 col-s-12" >
	<div class="formulario centro col-12 col-s-12">
		<div class="col-12 col-s-12">
			<h1>Eliminar Cuenta</H1>
		</div>
    <div class="col-12 col-s-12 contenedor">
    <form  action="" method="post">

      <div class="input-contenedor">
        <i class="fas fa-lock icon"></i>
        <input type="text" name="dni" value="" placeholder="Cedula" required>
      </div>
      <div class="input-contenedor">

        <i class="fas fa-lock icon"></i>
        <input type="password" name="contrasena" value="" placeholder="contrasena" required>

      </div>
      <div class="input-contenedor">

        <i class="fas fa-lock icon"></i>
        <input type="password" name="contrasena2" value="" placeholder="contrasena" required>

      </div>
      <input type="submit" value="Eliminar" class="button">
    </form>

    <?php include "../controlador/control-eliminar-cuenta.php";?>

    </div>

	</div>
</div>
</div>

<script src="../../js/jquery.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/view_car.js"></script>

</body>
</html>
