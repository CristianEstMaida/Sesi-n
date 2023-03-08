<?php
include('conexion.php');
include('funciones.php');

session_start();
revisa_login(); 

$idusuario=$_SESSION['idusuario'];
$fecha=date("Y-m-d H:i:s");
$comentario =$_POST['comentario'];

$resultado =mysqli_query($conexion, "INSERT INTO comentarios (idusuario,comentario,fecha) VALUES ('$idusuario','$comentario','$fecha')");


header('location:visitas.php');
   ?>






