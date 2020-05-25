<?php
 $host="localhost";
 $database ="store"; 
 $usuario = "root";
 $pass = "";



 $conectar= mysqli_connect($host,$usuario,$pass,$database);
 if ($conectar->connect_errno){
    echo("conexion exitosa");

 }else{
 echo("Ha ocurrido un fallo ");
 }















