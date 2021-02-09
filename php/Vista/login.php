<?php
	include_once "../includes/php_conexion.php";
	include_once "../includes/functions.php";

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HadeStore</title>
	<link type="text/css" rel="stylesheet" href="../../css/messages.css">
	<link href="../../css/estilo-menu.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
	<link href="../../css/formulario-regi.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style>
	.centro{
		/* margin-left:20%; */
	}


	</style>
  </head>

  <body>
<?php include_once "../menus/menu_index.php";  ?>

<div class="row">
<div class="col-6 col-s-12" >
	<div class="formulario centro col-12 col-s-12">
		<div class="col-12 col-s-12">
			<h1>Iniciar Sesi&oacute;n</H1>
		</div>
		<div class="col-12 col-s-12 contenedor">
			<?php
				include "../controlador/inicio-sesion.php";
		 	?>

		  <form name="form1" method="post" action="" >
						<div class="input-contenedor">
								<i class="fas fa-user-secret icon"></i>
								<input type="text" name="dni" placeholder="Usuario-DNI">
						</div>
						<div class="input-contenedor">
							<i class="fas fa-key icon"></i>
							<input type="password"  name ="contrasena"placeholder="Contrase&ntilde;a">
						</div>
							<input type="submit" value="Iniciar Sesi&oacute;n" class="button">
							<p>¿No tienes una cuenta? <a href="registro.php"> Registrate</a></p>
							<p>Olvidaste tu Contrase&ntilde;a? <a href="Recuperar-contra.php"> Recuperar Contrase&ntilde;a </a></p>
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
