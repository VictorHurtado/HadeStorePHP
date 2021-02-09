
<?php
 $oEli= new Producto();
 if(!empty($_POST['idpro'])){
    $id_pro=$_POST['idpro'];
    $oEli->eliminarProdu($id_pro);
    $oEli->EliInventario($id_pro);
    echo mensajes("Producto eliminado correctamente","verde");
    echo '<meta http-equiv="refresh" content="3;url=../Vista/eliminar-producto.php">';
 }
 
 

  
?>
