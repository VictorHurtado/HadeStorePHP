<?php
include "../Modelo/clientes.php";
if( !empty($_SESSION['dni'])){
  $consul_cli=$_SESSION['dni'];

  $oInf_cli=new cliente();

  $miCliente=$oInf_cli->getCliente($consul_cli);

}
 ?>
