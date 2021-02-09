<?php
  include "../includes/flechas.php";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla Ingresos</title>
    <link type="text/css" rel="stylesheet" href="../../css/messages.css">
    <link href="../../css/estilo-menu.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../../css/main-tablas.css">
<style>
.grafico{
  background-color: #e2e2e2;
  height: 430px;
}
</style>



  </head>
  <body>
      <?php  include "../menus/menu-Admin.php";?>
    <div class="row">

      <div class="col-1" style="padding-top:25px;">
        <form method="post" action="" name="anterior">
	        <input type="hidden" name="txback" value="<?php echo $mes; ?>">
	        <input type="hidden" name="txaa" value="<?php echo $anio; ?>">
	        <button type="submit" class="ant"><i class="fas fa-angle-double-left fa-2x"></i></button>
	      </form>
      </div>
      <div class="col-10" style="padding-left:25%; padding-top:0px;">
          <h1>Ingresos de <?php setlocale(LC_ALL,"es_ES"); $meses=array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); echo $meses[$mes-1];  ?> del  <?php echo $anio; ?>    </h1>

      </div>

      <div class="col-1" style="padding-top:25px;">
        <form method="post" action="" name="siguiente">
	        <input type="hidden" name="txnext" value="<?php echo $mes; ?>">
        	<input type="hidden" name="txas" value="<?php echo $anio; ?>">
	        <button type="submit" class="sig"><i class="fas fa-angle-double-right fa-2x"></i></button>
        </form>
      </div>


      <div class="col-6 col-s-12">

        <table class="col-12 col-s-12">
          <tr>
            <th style="text-align:center;">Fecha</th>
            <th style="text-align:center;">Ingresos</th>
          </tr>
          <?php
                include "../includes/inclu-ingre.php";
          ?>
          </table>
        </div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = google.visualization.arrayToDataTable([
	['Meses','Ingresos']

	<?php
	for($i=1;$i<=31;$i++){
	$pe=mysqli_query($conexion, "SELECT  sum(valor) as val FROM ingresos WHERE year(fecha)=$anio and Month(fecha)=$mes and day(fecha)=$i");
	$row=mysqli_fetch_array($pe);
		$valo=$row['val']+0;
	?>
	,['<?php echo $i; ?>',<?php echo $valo; ?>]
	<?php
		}
	?>
	],false);


      // Set chart options
      var options = {'title':'Ingresos Diarios',
                     'width':650,
                     'height':400,
			colors: ['#009900']};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
        <div class="col-6 col-s-12 grafico" id="chart_div">

        </div>
    </div>
    <script src="../../js/view_car.js">  </script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/filtro.js"></script>
  </body>
</html>
