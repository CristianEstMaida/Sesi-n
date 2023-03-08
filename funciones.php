<?php 
function nombre_usuario($idusuario){

	global $conexion;
	$rs=mysqli_query($conexion, "SELECT nombre, apellido FROM usuarios WHERE idusuario='$idusuario'");
	$fila=mysqli_fetch_array($rs); // captura la fila
	return $fila['nombre'] . " " . $fila['apellido'];
}	


function revisa_login(){
	if(isset($_SESSION['idusuario']) == false){
		header('location:index.php');
	} 
}
?>