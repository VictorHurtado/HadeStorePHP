<?php
	session_start();
	//include_once "controlTiempo.php";
	// include_once "../includes/php_conexion.php";
	include_once "../includes/functions.php";
	?>
<!DOCTYPE html>
<html lang="es">
  <head>
		<!--
		<style>

		</style>-->
	<title> Registrar Productos</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="../../css/messages.css">
		<link href="../../css/estilo-menu.css" rel="stylesheet">
		<link href="../../css/responsive.css" rel="stylesheet">
		<link href="../../css/formulario-regi.css" rel="stylesheet">
		<link rel="stylesheet" href="../../css/estilos-Admin-Principal.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

		</head>
		<body>
		        <?php
					include_once "../menus/menu-Admin.php";
				?>

        	<div>
		<div style="margin: 0 auto;" class="row" >
		<div style="margin: 0 auto;" class="col-12 col-s-12" >
			<div style="margin: 0 auto;" class="formulario centro col-12 col-s-12 "style="margin: 0 auto;" >
				<div style="margin: 0 auto;" class="col-12 col-s-12">
				<h1> Registrar Productos </h1>
                    <form name="form1" method="post" action="" enctype="multipart/form-data">
									<div class="input-contenedor">
										<i class="fas fa-user-edit icon"></i>
										<input type="text" name="descripcion" value="" placeholder="Descripci&oacute;n">
									</div>
									<div class="input-contenedor">
										<i class="fas fa-user-edit icon"></i>
										<input type="text" name="precio-unitario" value="" placeholder="Precio Unitario">
									</div>
									<div class="input-contenedor">
										<i class="fas fa-user-edit icon"></i>
										<input type="text" name="stop-minimo" value="" placeholder="Stop M&iacute;nimo">
									</div>
									<div class="input-contenedor">
										<i class="fas fa-user-edit icon"></i>
                    	<select style="width:90%" name="txcate" required class="lista">
                        <option value="Ropa Hombre"> Ropa Hombre </option>
                        <option value="Ropa Mujer"> Ropa Mujer </option>
                        <option value="Zapatillas Hombre"> Zapatillas Hombre </option>
                        <option value="Zapatillas Mujer"> Zapatillas Mujer </option>
                        </select>
                        <br>
									</div>
        				<label>Url</label><br><br>
                                	<input name="txurl" type="file" autocomplete="off" title="Recuerde que el archivo de estar en formato JPG">
    								<br><br> <br>


											<input type="submit" value="Registrar Producto" class="button">



                        </button>
                    </form>
							</div>
						</div>
					</div>
				</div>
                <?php
	                include_once "../Controlador/Control-regis-pro.php";
                ?>
            </div>


</body>
</html>