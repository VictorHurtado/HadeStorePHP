<?php

	include_once "../includes/php_conexion.php";
	include_once "../includes/functions.php";
	include_once "../menus/menu_index.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>HadeStore</title>
	<link type="text/css" rel="stylesheet" href="../../css/messages.css">
	<link href="../../css/estilo-menu.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/formulario-regi.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
  </head>

  <body>


<div class="row">
<div class="col-6 col-s-12">
	<div class="formulario centro col-12 col-s-12">
		<div class="col-12 col-s-12">
			<h1>Registrate</H1>
		</div>
		<div class="col-12 col-s-12 contenedor">
			<?php
				include "../Controlador/control_registro.php";
		 	?>

		  <form name="form1" method="post" action="" >
						<div class="input-contenedor">
							<i class="fas fa-user-edit icon"></i>
							<input type="text" name="nombre" value="" placeholder="Nombre">
						</div>
						<div class="input-contenedor">
								<i class="fas fa-user-secret icon"></i>
								<input type="text" name="dni" placeholder="Usuario-DNI">
						</div>
						<div class="input-contenedor">
							<i class="fas fa-key icon"></i>
							<input type="password"  name ="contrasena" placeholder="Contrase&ntilde;a">
						</div>
						<div class="input-contenedor">
							<i class="fas fa-envelope icon"></i>
							<input type="text" name="correo" value="" placeholder="Email">
						</div>
						<div class="input-contenedor">
							<i class="fas fa-mobile-alt icon"></i>
							<input type="text" name="telefono" value="" placeholder="Tel&eacute;fono">
						</div>
						<div class="input-contenedor">
							<i class="fas fa-compass icon"></i>
						 	<input type="text" name="direccion" value="" placeholder="Direcci&oacute;n">
						</div>
							<input type="submit" value="Registrar" class="button">
							<p>¿ya tienes una cuenta? <a href="login.php"> Iniciar Sesi&oacute;n</a></p>

			</form>
		</div>
	</div>
</div>
</div>

<script src="../../js/jquery.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/filtro.js"></script>

</body>
</html>
