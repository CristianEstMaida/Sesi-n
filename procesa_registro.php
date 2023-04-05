<?php 
	include('conexion.php');

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['tel'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	$resultado = mysqli_query($conexion, "INSERT INTO usuarios VALUES (NULL,'$usuario','$clave','$nombre','$apellido','$email','$telefono')");
	
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

	<?php if($resultado!=0) { ?>
		$remitente_usuario ="From: Cristian Maida <cristianmaida@outlook.com";
		$asunto_usuario = 'Aviso de contraseña';
		$contenido_usuario = 'Hola ' . $usuario . ' tu contraseña es ' . $clave . "\r\n";

		mail($email, $asunto_usuario, $contenido_usuario, $remitente_usuario);

		<p>Ir a la página <a href="index.php">ingreso</a></p>

	<?php } else { ?>

		<p>Se ha producido un error. Intentelo nuevamente <a href="javascript:history.back();">aqui</a></p>

	<?php } ?>	
	
</body>
</html>
