<?php 
include('conexion.php');
include('funciones.php');

session_start();
revisa_login();
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

	<h4>Ingrese su comentario:</h4>
	<form action="grabar.php" method="POST">
		<table>
			<tr>
				<td>Autor</td>
				<td><?php echo nombre_usuario($_SESSION['idusuario']); ?></td>
			</tr>
			<tr>
				<td>Comentario</td>
				<td><textarea name="comentario" rows="10"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>