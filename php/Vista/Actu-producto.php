
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
<?php include_once "../menus/menu-Admin.php";  ?>

<div class="row">
<div class="col-6 col-s-12" >
	<div class="formulario centro col-12 col-s-12">
		<div class="col-12 col-s-12">
			<h1>Modificar Producto</H1>
		</div>
		<div class="col-12 col-s-12 contenedor">
			<?php
				include "../controlador/consul-pro.php";
		 	?>

		  <form name="form1" method="post" action="" >
						<div class="input-contenedor">
								<i class="fas fa-tshirt icon"></i>

								<input type="text" name="idpro" value="" placeholder="Producto" list="product" id="pro" autocomplete="off">
                                <datalist id="product">
                                    <!-- AQUI PONE EL FOR Y DENTRO DE EL LA ETIQUETA OPTION CON LOS PRODUCTOS QUE HAY EN LA BASE DE DATOS -->
																		<?php
																		var_dump($productos);
																		for($j=0;$j<$long;$j++){


																			?>
																				<option value="<?php echo $productos[$j]['id_producto'];  ?>"><?php echo $productos[$j]['descripcion'] ?></option>

																			<?php
																		}
																		?>
                                </datalist>
						</div>
						<div class="input-contenedor">
							<i class="fas fa-dollar-sign icon"></i>
							<input type="text"  name ="valor" placeholder="Valor Unitario">
						</div>
                        <div class="input-contenedor">
							<i class="fas fa-bell icon"></i>
							<input type="text"  name ="stop" placeholder="Stop Minimo">
						</div>
							<input type="submit" value="Modificar" class="button">

			</form>
            <?php
				include "../controlador/mod-pro.php";
		 	?>
		</div>
	</div>
</div>
</div>
<script src="../../js/jquery.js"></script>
<script src="../../js/main.js"></script>

</body>
</html>
