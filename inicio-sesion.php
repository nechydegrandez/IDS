<?php
include_once('conexion2.php');
session_start();

$nombre = $_POST['user'];
$pass = $_POST['pass'];



$query = "SELECT * from usuarios where usuario = '$nombre' and contrasenia = sha('$pass')";
$respuesta = mysqli_query($conectar, $query);
$filas = mysqli_fetch_array($respuesta, MYSQLI_ASSOC);


if ($filas>0) {
    $_SESSION['user'] = $nombre;
    $_SESSION['pass'] = $pass;
    
 

    header("location:index.php");
  }else {
    echo 'DATOS INCORRECTOS';
    
    
    header("location:login.php");
  }