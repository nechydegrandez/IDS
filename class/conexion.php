<?php
    $serverName = "localhost";
    //AGREGAR EL NOMBRE DE LA BASE DE DATOS CUALQUIERA Y LA CONTRASEÑA DE USUARIO , YO LA QUITE POR QUE ES ALGO PERSONAL JAJAJ
    $infoConnection = array("Database"=>"Espumillas","UID"=>"user","PWD"=>"123","CharacterSet"=>"UTF-8");
    try {
        $conexion = sqlsrv_connect($serverName,$infoConnection);

    } catch (Execption $e) {
        die('Connected Failed: ' . $e->getMessage());
    }

?>