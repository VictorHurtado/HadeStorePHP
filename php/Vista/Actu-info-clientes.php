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
	<link href="../../css/perfil.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  </head>

  <body>


<div class="row" >
<div class="col-6 col-s-12" >
	<div class="formulario col-12 col-s-12">
		<div class="col-12 col-s-12">
			<h1>Perfil Personal</H1>
		</div>
		<div class="col-12 col-s-12 contenedor">
			<?php

			include "../Controlador/control-show-cliente.php";
			// echo mensajes("Actualmente los campos estan bloqueados, para desbloquearlos pulse el boton de desbloquear","verde");
		 	?>

		  <form name="form1" id="write" method="post" action="" >

						<div class="input-contenedor">

							<label for="nombre">Nombre:</label>
							<input  type="text" name="nombre" value="<?php echo $miCliente['nombre']; ?>" placeholder="Nombre" readOnly>
							<i class="fas fa-user-edit icon"></i>
						</div>
						<div class="input-contenedor">
							<label for="correo">Correo:</label>
							<input type="text" name="correo" value="<?php echo $miCliente['correo']; ?>" placeholder="Email" readonly>
							<i class="fas fa-envelope icon"></i>
						</div>
						<div class="input-contenedor">
							<label for="telefono">telefono:</label>
							<input type="text" name="telefono" value="<?php echo $miCliente['telefono']; ?>" placeholder="Tel&eacute;fono" readonly>
							<i class="fas fa-mobile-alt icon"></i>
						</div>
						<div class="input-contenedor">
							<label for="direccion">direccion:</label>
						 	<input  type="text" name="direccion" value="<?php echo $miCliente['direccion']; ?>" placeholder="Direcci&oacute;n" readonly>
								<i class="fas fa-compass icon"></i>
						</div>
						<div class="deactive" id="mostrar">
							<label for="contrasena">contrasena:</label>

						 	<input type="password" name="contrasena" value="" placeholder="contrasena" required>
							<i class="fas fa-lock icon"></i>
						</div>


							<div class="deactive" id="mostrar2">
									<input type="submit" value="Actualizar" class="button">
							</div>
							<div class="actu_info" >
									Desbloquear: <a href="#" onclick="modificar('mostrar','mostrar2','write')" ><i class="fas fa-lock-open"></i></a>
							</div>

			</form>

			<div class="Eliminar">
				<p>Para eliminar su cuenta pulse en el siguiente enlace:</p>
				<a href="../vista/eliminar-cuenta.php" >Eliminar Mi cuenta</a>
			</div>


			<?php include "../Controlador/control-actu-cliente.php"; ?>
		</div>
	</div>
</div>
</div>

<script src="../../js/jquery.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/view_car.js"></script>

</body>
</html>
