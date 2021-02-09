<?php

    include_once "../includes/php_conexion.php";
    include_once "../includes/functions.php";
    include_once "../Modelo/clientes.php";


    if(!empty($_POST['contrasena'])&&!empty($_POST['contra-actu'])&&!empty($_POST['confirmar']) ){

        $clavean=($_POST['contra-actu']);

        $clave=($_POST['contrasena']);

        $claveveri=($_POST['confirmar']);

        $oClave=new cliente();

        $user=$oClave->getUsuario($id);

        if(password_verify($clavean,$user['contrasena'])){

            if($clave==$claveveri){
                if($clavean==$clave){
                    echo mensajes('Debe ser una Contrase&ntilde;a diferente a la actual.','rojo');
                }else{


                $clave_encri=password_hash($claveveri, PASSWORD_DEFAULT);
                $oClave-> modificarClave($id,$clave_encri);
                echo mensajes('Contrase&ntilde;a cambiada con &eacute;xito','verde');
            }
            }else{
                echo mensajes('Las contraseñas no coinciden','rojo');
            }

        } else{
            echo mensajes('Lo sentimos, la Contraseña actual no coincide','rojo');
        }
    }
?>
