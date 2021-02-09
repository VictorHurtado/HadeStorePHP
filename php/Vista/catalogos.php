<?php
session_start();
error_reporting(0);


$cate=$_GET['cate'];
$tipo=$_SESSION['tipo'];
$cliente=$_SESSION['dni'];

 ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hade Store</title>
    <link rel="stylesheet" href="../../css/estilo-menu.css">
    <link rel="stylesheet" href="../../css/main_catalogo.css">
    <link rel="stylesheet" href="../../css/responsive.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="../../css/messages.css" title="Estilo alternativo" rel="stylesheet">
</head>

<body class="hidden">
  <div  class="contenedorP_carrito deactive" id="sidebar_car">
    <?php include_once "vista_car.php"; ?>
  </div>
<div class="row">
  <div class="col-12 col-s-12" >
    <?php  include("../menus/menu-aux.php"); ?>
  </div>
      <div class="caja_categorias col-2 col-s-2">
        <a href="?cate=Ropa%20Mujer">Ropa Mujer</a><br>
        <a href="?cate=Ropa%20Hombre">Ropa Hombre</a><br>
        <a href="?cate=Zapatillas%20Hombre">Zapatillas Hombre</a>
        <br>
        <a href="?cate=Zapatillas%20Mujer">Zapatillas Mujer</a><br>
      </div>
      <div class="contenedor_productos col-10 col-s-10">
        <?php
          if($cate =="Ropa Mujer"){
            $response= json_decode(file_get_contents('http://localhost/original/php/Controlador/api-productos.php?categoria=Ropa%20Mujer'),true);
          }elseif ($cate=="Ropa Hombre") {
            $response= json_decode(file_get_contents('http://localhost/original/php/Controlador/api-productos.php?categoria=Ropa%20Hombre'),true);
          }elseif($cate=="Zapatillas Hombre"){
            $response= json_decode(file_get_contents('http://localhost/original/php/Controlador/api-productos.php?categoria=Zapatillas%20Hombre'),true);
          }else{
            $response= json_decode(file_get_contents('http://localhost/original/php/Controlador/api-productos.php?categoria=Zapatillas%20Mujer'),true);
          }


          if($response['statuscode']==200){
            foreach ($response['items'] as $product) {
                include("../includes/items.php");
            }
          }
         ?>
      </div>


    </div>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/.png" alt="">
            </div>
            <div class="iconos">
                <i class="fab fa-html5"></i>
                <i class="fab fa-css3-alt"></i>
                <i class="fab fa-js-square"></i>
                <i class="fab fa-php"></i>

            </div>
            <p>La pasión e innovación es lo que nos distingue del resto</p>
        </div>

    </footer>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/view_car.js"></script>

</body>

</html>
