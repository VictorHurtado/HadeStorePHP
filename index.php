<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hade Store</title>
    <link rel="icon" href="assets/dragon.png">
    <link rel="stylesheet" href="css/estilo-menu.css">
    <link rel="stylesheet" href="css/estilos_main_index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body class="hidden">

    <div class="centrado" id="onload">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <?php

            include("php/menus/menu_index.php");

          ?>

    <main>
      <div class="textos">
          <h1>Hade Store</h1>
          <h2>Venta Prendas Deportivas</h2>
      </div>
        <section class="team contenedor" id="equipo">
            <h3 style ="margin-top: 40px;">Categor&iacute;as</h3>
            <p class="after">Hade Store tiene para ti: </p>
            <div class="card">
                <div class="content-card">
                  <a href="php/vista/catalogos.php?cate=Ropa Hombre" target="_blank">
                    <div class="people">
                        <img src="img/moda-hombre.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Masculina</h4>
                        <p>Camisetas y Pantalones</p>
                    </div>
                  </a>
                </div>

                <div class="content-card">
                  <a href="php/vista/catalogos.php?cate=Ropa Mujer" target="_blank">
                    <div class="people">
                        <img src="img/mujer.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Femenina</h4>
                        <p>Blusas y Pantalones</p>
                    </div>
                    </a>
                </div>
                <div class="content-card">
                  <a href="php/vista/catalogos.php?cate=Zapatillas Hombre" target="_blank">
                    <div class="people">
                        <img src="img/zapatillas.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Zapatillas</h4>
                        <p>Hombre</p>
                    </div>
                    </a>
                </div>
                <div class="content-card">
                  <a href="php/vista/catalogos.php?cate=Zapatillas Mujer" target="_blank">
                    <div class="people">
                        <img src="img/zapatillas-rosa.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Zapatillas</h4>
                        <p>Dama</p>
                    </div>
                  </a>
                </div>
            </div>
        </section>
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3 style = "margin-top: 50px">C&oacute;mo realizar la compra</h3>
                <p class="after">Siempre mejorando para ti</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Realizas tu pedido</h4>
                        <p>Seleccionas las prendas que deseas y a&ntilde;ades a tu carrito</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/lupa.png" alt="">
                        <h4>Aprobado y contacto</h4>
                        <p>Ser&aacute; aprobado tu pedido y nos contactaremos contigo</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/enviar.png" alt="">
                        <h4>Env&iacute;o</h4>
                        <p>Tus articulos llegaran a la puerta de tu casa</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work contenedor" id="trabajo">
            <h1 class="hola">Nuestro Trabajo</h1>
            <p class="after" style = "color: black;">Hacemos de algo simple algo extraordinario</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='diseño'>Sacos</li>
                    <li class="filter" data-nombre='programacion'>Jeans</li>
                    <li class="filter" data-nombre='marketing'>Zapatillas</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/jeans1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Jeans</h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/jeans2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Jeans</h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/jeans3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Jeans</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/camiseta1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Sacos</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/camiseta2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Sacos</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/camiseta3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Sacos</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/zapatillas1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Zapatillas</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/zapatillas2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Zapatillas</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/zapatillas3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Zapatillas</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
      <!-- footer redes sociales -->
      <section class="lema">
        <div class=" contenedor-texto">
            <p>@HadeStore - Todos Los Derechos Reservados</p>
        </div>
      </section>
      <section class="redes-sociales">
        <div class="contenedor">
          <a href="https://twitter.com/Victor29370295" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="https://www.facebook.com/victor.lopezzxd" class="facebook"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.youtube.com/channel/UCvrnug77ij85oMLhCikxjIQ?view_as=subscriber" class="youtube"><i class="fab fa-youtube"></i></a>
          <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
          <a href="https://www.instagram.com/victor_hurtadol/?hl=es-la" class="instagram"><i class="fab fa-instagram"></i></a>

        </div>
      </section>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>

</html>
