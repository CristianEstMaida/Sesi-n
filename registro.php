<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3>Complete el siguiente formulario</h3>
	<form action="procesa_registro.php" method="POST">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Telefono</td>
				<td><input type="text" name="tel"></td>
			</tr>
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
				<td><input type="submit" value="Registrar"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>