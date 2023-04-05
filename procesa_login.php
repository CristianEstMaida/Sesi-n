<?php
include('conexion.php');

$usuario=$_POST['usuario'];
$clave =$_POST['clave'];

$query = "SELECT idusuario FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";

$resultado =mysqli_query($conexion,$query);

if(mysqli_num_rows($resultado) > 0){ 
	session_start(); 
	$fila =mysqli_fetch_array($resultado); 

	$_SESSION['idusuario'] = $fila['idusuario'];
	header("location:visitas.php"); 
}else{
	echo "Datos incorrectos. Intentelo nuevamente <a href=\"index.php\">aqui</a>";
}
?>
