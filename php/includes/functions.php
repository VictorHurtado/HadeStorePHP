<?php

function mensajes($mensaje,$tipo){
if($tipo=='verde'){
$tipo='suceso';
}elseif($tipo=='rojo'){
$tipo='error';
}elseif($tipo=='azul'){
$tipo='informacion';
}
return '<div class="msg"> <input id="cerrar" name="cerrar" type="checkbox">
<label class="inputlabel" for="cerrar"></label><div class="'.$tipo.'" align="center" ">
'.$mensaje.'
</div></div>';
}

?>
