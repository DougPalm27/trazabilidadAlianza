<?php

/**
 * Descripction....: direcciones para el control de las rutas del sistema
 * Autor : Marcos 
 */
$valor= 1;
if($valor!=1){
    echo "<meta http-equiv='refresh' content='0; url=https://simfcoh.com/'>";
}else{
    if (empty($_GET['module'])) {
       include "./modules/inicio/inicio.php";
    }else{
        /**
         * Módulo: prueba
         * Description : rutas para el control de la plataforma trazabilidad para alianza prros
         */
        $_GET['module'] == 'productores' ? include "./modules/inicio/views/principal.php" : false ;
    }
}

?>