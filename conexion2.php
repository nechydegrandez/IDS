<?php
 $host="localhost";
 $database ="espumillas"; 
 $usuario = "root";
 $pass = "";
 $port = "3308";



 $conectar= mysqli_connect($host, $usuario, $pass, $database, $port);
 if ($conectar){
    echo("conexion exitosa");
    $query = "SELECT * from usuarios";
    $respuesta = mysqli_query($conectar, $query);
   $filas = mysqli_fetch_array($respuesta, MYSQLI_ASSOC);
   var_dump($filas);

 }else{
 echo("Ha ocurrido un fallo ");
 }