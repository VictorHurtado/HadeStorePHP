
<?php
session_start();
error_reporting(0);

 ?>
 <header>
     <nav id="nav" class="nav1">
         <div class="contenedor-nav">
             <div class="logo">
                 <a href=""> <img src="http://localhost/original/img/hadestore.png" alt=""></a>
             </div>
             <div class="enlaces" id="enlaces">
 		            <ul>
                   <li><a href="http://localhost/original/index.php" id="enlace-inicio" class="btn-header">Inicio</a></li>
                   <li>
                     <a href="http://localhost/original/index.php#equipo" id="enlace-equipo" class="btn-header">Ropa</a>

                  </li>
   		             <li><a href="http://localhost/original/index.php#servicio" id="enlace-trabajo" class="btn-header">Informaci&oacute;n</a></li>
                   <li><a href="http://localhost/original/index.php#contacto" id="enlace-
                   contacto" class="btn-header">Contacto</a></li>
                     <?php
                         if($_SESSION['dni']==null || $_SESSION['dni'] ==''){
                           echo '<a href="http://localhost/original/php/vista/registro.php" ><i class="fas fa-user-plus"></i></a>
                           <a href="http://localhost/original/php/vista/login.php"><i class="fas fa-user"></i></a>';
     // <i class="fas fa-caret-down"></i>
                         }else{

                             echo '
                             <li>
                               <a href="#">Bienvenido '.$_SESSION["nombre"].'</a>
                               <ul >
                                  <li><a  href="http://localhost/original/php/Vista/Actu-info-clientes.php">Mi informaci&oacute;n</a></li>
                                  <li><a href="http://localhost/original/php/Vista/Actu-Contra-Admin.php">Cambiar Mi Contrase&ntilde;a</a></li>
                                  <li><a href="http://localhost/original/php/Vista/cliente-pedidos.php">Mis Pedidos</a></li>
                                  <li><a href="http://localhost/original/php/Vista/eliminar-cuenta.php">Eliminar Mi Usuario</a></li>
                                  <li><a href="http://localhost/original/php/includes/cerrarSesion.php">Salir</a></li>
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
