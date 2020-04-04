<?php

    include ("../class/conexion.php");
    include ("../class/class-empresas.php");

    $conexion = new Conexion();

    switch ($_GET["accion"]){

        case "obtener-lista-empresas":
            $empr = new empresas(null,null,null,null);
            echo $empr->listaEmpresas($conexion);
        break;
    }
    
?>