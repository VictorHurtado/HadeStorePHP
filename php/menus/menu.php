<!-- PROVISIONAL -->
<?php
session_start();
error_reporting(0);
 ?>
<header>
    <nav id="nav" class="nav1">
        <div class="contenedor-nav">
            <div class="logo">
                <a href="index.php"><img src="img/hadestore.png" alt=""></a>

            </div>
            <div class="enlaces" id="enlaces">
                <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                <a href="#" id="enlace-equipo" class="btn-header">Ropa</a>
                <a href="#" id="enlace-servicio" class="btn-header">Zapatos</a>
                <a href="#" id="enlace-trabajo" class="btn-header">Información</a>
                <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                <?php
                    if($_SESSION['dni']==null || $_SESSION['dni'] ==''){
                      echo '<a href="php/vista/registro.php" ><i class="fas fa-user-plus"></i></a>
                      <a href="php/vista/login.php"><i class="fas fa-user"></i></a>';
// <i class="fas fa-caret-down"></i>
                    }else{
                        echo '<a href="php/includes/cerrarSesion.php">cerrar sesion</a>';
                    }
                 ?>

            </div>
            <div class="icono" id="open">
                <span>&#9776;</span>
            </div>
        </div>
    </nav>

</header>
