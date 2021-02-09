<?php
$mes=date("m");
$anio=date("Y");

if(!empty($_POST['txnext'])){
    $mes=$_POST['txnext'];
    $anio=$_POST['txas'];			
    $mes=$mes+1;
    if($mes==13){
    $mes=1;
    $anio=$anio+1;
    }
}
else{
    $mes=date("n");
    $anio=date("Y");
    
}
if(!empty($_POST['txback'])){
		$mes=$_POST['txback'];
		$anio=$_POST['txaa'];			
		$mes=$mes-1;
		if($mes==0){
		$mes=12;
		$anio=$anio-1;
		}
	}
	else{
		$mes=date("n");
		$anio=date("Y");
		
	}



?>