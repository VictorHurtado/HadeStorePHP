<?php 
include '../includes/php_conexion.php';
include '../Modelo/pedidos.php';


$oEgre= new Ingreso();
$egresos=$oEgre->consulEgresos($mes,$anio);
//$long=count($ingresos);
//echo $long;
//var_dump($ingresos);
foreach($egresos as $Egre){
    $fecha=$Egre['fecha'];
    $valor=$Egre['volt'];

    ?>
    <tr>
        <td>
            <?php 
                echo $fecha;
                
            ?>
        </td>
        <td style="text-align:right;">$
            <?php 
               echo number_format($valor, 0, '', '.');
            ?>
        </td>
    </tr>
    <?php
    $tot=$tot + $valor;
}

?>

    <tr>
        <td>
            Total Egresos Del Mes
        </td>

        <td style="text-align:right;">$
            <?php
                echo number_format($tot, 0, '', '.');
            ?>
        </td>
    </tr>
