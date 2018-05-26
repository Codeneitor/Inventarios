<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instalación</title>
	<!--IMPLEMENTACIÓN DE BOOTSTRAP-->
</head>
<body>
	<h1>Instalación Gestión de Inventarios.</h1>
	<table border="solid 1px black">
		<tr>
			<th>Configuracipon de la base de datos</th>
		</tr>
		<tr>
			<td><input type="text" id="server" value="localhost"></td>
		</tr>
		<tr>
			<td><input type="text" id="mysqlUser" value="Usuario de MySql"></td>
		</tr>
		<tr>
			<td><input type="text" id="mysqlPwd" value="Contraseña de MySql"></td>
		</tr>
		<tr>
			<td><input type="text" id="user" value="Usuario sistema de inventarios "></td>
		</tr>
		<tr>
			<td><input type="text" id="pwd" value="Contraseña sistema de inventarios"></td>
		</tr>
		<tr>
			<td>
				<a href="install_db.php"><button type="button" id="instalar"> Instalar</button></a>
			</td>
		</tr>
	</table>
</body>
</html>