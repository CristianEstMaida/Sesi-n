<?php 
include('conexion.php');
include('funciones.php');

session_start(); 
revisa_login();

$resultado =mysqli_query($conexion,"SELECT idusuario,fecha,comentario FROM comentarios ORDER BY fecha DESC LIMIT 5");
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h4><b>Usuario actual: </b><?php echo nombre_usuario($_SESSION['idusuario']); ?></h4>
	<p><a href="ingreso_comentarios.php">Agregar comentario</a> - <a href="salir.php">Cerrar sesión</a></p>
	<?php while($fila =mysqli_fetch_array($resultado) ) { 
		 ?>
	<table>
		<tr>
			<td>Autor</td>
			<td><?php echo nombre_usuario($fila['idusuario']); ?></td>
		</tr>
		<tr>
			<td>Fecha</td>
			<td><?php echo $fila['fecha']; ?></td>
		</tr>
		<tr>
			<td>Comentario</td>
			<td><textarea rows="10"><?php echo $fila['comentario']; ?></textarea></td>
		</tr>

	</table>
	<?php } ?>
</body>
</html>