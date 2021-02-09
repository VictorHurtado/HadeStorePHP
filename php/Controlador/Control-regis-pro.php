<?php
	include "../Modelo/productos.php";

		if(!empty($_POST['txproducto'])&&!empty($_POST['txprecio'])&&!empty($_POST['txstop'])&&!empty($_POST['txcate']) ){
			  $target_path = "../../img/Productos/";
        		  $target_path = $target_path . basename( $_FILES['txurl']['name']);
				echo basename($_FILES['txurl']['name']);
        		  if(move_uploaded_file($_FILES['txurl']['tmp_name'], $target_path)) {
           			 echo "El archivo ". basename( $_FILES['txurl']['name']). " ha sido subido";
        			} else{
           			 echo "Ha ocurrido un error, trate de nuevo!";
       				}
           		$url=$target_path;
            	$des=limpiar($_POST['txproducto']);
            	$pre=(int)limpiar($_POST['txprecio']);
            	$stop=(int)limpiar($_POST['txstop']);
            	$cate=limpiar($_POST['txcate']);
				$oProducto= new Producto();
      			$produc= $oProducto->consultarProducto($des);

			if ($produc['descripcion']!=$des){
				$oProducto->nuevoProducto($des,$pre,$cate,$url,$stop);


			}
			echo mensajes('producto registrado con exito','verde');
			echo '<meta http-equiv="refresh" content="2;url=../Vista/Admin-Principal.php">';
		}
?>
