<?php
session_start();
error_reporting(0);

 ?>
<header>
    <nav id="nav" class="nav1">
        <div class="contenedor-nav">
            <div class="logo">
                <a href="despacho-pedidos.php"> <img src="../../img/hadestore.png" alt=""></a>
            </div>
            <div class="enlaces" id="enlaces">
            <ul>

                <li><a href="#" class="btn-header">Gesti&oacute;n Productos</a>
                <ul>
                <li> <a href="http://localhost/original/php/Vista/registrar-producto.php" class="btn-header">Registrar Producto</a></li>

                <li> <a href="http://localhost/original/php/Vista/Actu-producto.php" class="btn-header">Actualizar Producto</a></li>

                <li> <a href="http://localhost/original/php/Vista/eliminar-producto.php" class="btn-header">Eliminar Producto</a></li>
                <li> <a href="http://localhost/original/php/Vista/inventario.php" class="btn-header">Inventario</a></li>

                </ul>

                </li>

                <li> <a href="#" class="btn-header">Gesti&oacute;n Financiera</a>
                <ul>
                <li> <a href="http://localhost/original/php/Vista/compras.php" class="btn-header">Registrar Compras</a></li>
                <li> <a href="http://localhost/original/php/Vista/tabla-ingre.php" class="btn-header">Consultar Ingresos</a></li>
                <li> <a href="http://localhost/original/php/Vista/tabla-egre.php" class="btn-header">Consultar Egresos</a></li>
                </ul>
                </li>

                <li> <a href="#" class="btn-header">Gesti&oacute;n Administrativa</a>
                <ul>
                <li> <a href="http://localhost/original/php/Vista/Agregar-emple.php" class="btn-header">Registrar Empleado</a></li>

                </ul>
                </li>
                <?php
                         if($_SESSION['dni']==null || $_SESSION['dni'] ==''){

                         }else{

                             echo '
                             <li>
                               <a href="#"> '.$_SESSION["nombre"].'</a>
                               <ul>
                                  <li><a href="http://localhost/original/php/Vista/Actu-Contra-Admin.php">Actualizar Contrase&ntilde;a</a></li>
                                  
                                  <li><a href="http://localhost/original/php/includes/cerrarSesion.php">Cerrar Sesi&oacute;n</a></li>
                                </ul>
                             </li>';
                         }

                      ?>
                 </ul>

            </div>
            <div class="icono" id="open">
                <span>&#9776;</span>
            </div>
        </div>
    </nav>
</header>
