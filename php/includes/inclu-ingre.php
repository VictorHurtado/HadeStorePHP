<?php 
include '../includes/php_conexion.php';
include '../Modelo/pedidos.php';


$oIngre= new Ingreso();
$ingresos=$oIngre->consulIngresos($mes,$anio);
//$long=count($ingresos);
//echo $long;
//var_dump($ingresos);
foreach($ingresos as $inge){
    $fecha=$inge['fecha'];
    $valor=$inge['valt'];

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
            Total Ingresos Del Mes
        </td>

        <td style="text-align:right;">$
            <?php
                echo number_format($tot, 0, '', '.');
            ?>
        </td>
    </tr>
