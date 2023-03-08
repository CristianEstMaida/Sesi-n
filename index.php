<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="procesa_login.php" method="POST">
		<table>
			<tr>
				<td>Usuario</td>
				<td><input type="text" name="usuario"></td>
			</tr>			
			<tr>
				<td>Contraseña</td>
				<td><input type="password" name="clave"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
	<p>Si no estas registrado , hace click <a href="registro.php">aqui</a></p>
	
</body>
</html>