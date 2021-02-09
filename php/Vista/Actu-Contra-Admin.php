<?php
	session_start();
	include_once "../includes/php_conexion.php";
	include_once "../includes/functions.php";
	$tipo=$_SESSION['tipo'];
	$id=$_SESSION['dni'];

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

<?php
if($tipo=="cliente"){
	include_once "../menus/menu_index.php";
} else{
	include_once "../menus/menu-Admin.php";
}
?>

<div class="row">
<div class="col-6 col-s-12" >
	<div class="formulario centro col-12 col-s-12">
		<div class="col-12 col-s-12">
			<h1>Cambiar Mi Clave</H1>
		</div>
		<div class="col-12 col-s-12 contenedor">
			<?php
				include_once "../Controlador/Control-actu-contra.php";
		 	?>

		  <form name="form1" method="post" action="" >
						<div class="input-contenedor">
								<i class="fas fa-user-secret icon"></i>
								<input type="password"  name ="contra-actu" placeholder="Contrase&ntilde;a Actual">
						</div>
						<div class="input-contenedor">
							<i class="fas fa-key icon"></i>
							<input type="password"  name ="contrasena" placeholder="Contrase&ntilde;a Nueva">
						</div>
                        <div class="input-contenedor">
							<i class="fas fa-key icon"></i>
							<input type="password"  name ="confirmar" placeholder="Confirmar Contrase&ntilde;a">
						</div>
							<input type="submit" value="Cambiar Contrase&ntilde;a" class="button">

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
