<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>

</head>
<body>
<form  action="ConexionBD.php" title="Consulta" method="POST">
		<table><tr><td>
		Nombre</td><td> <input type="text" name="nombre"></td></tr>
		<tr><td colspan="2"><input type="submit" name="consultar" value="Consultar">
</td></tr></table>
</form>
<form  action="insertar.php" title="Guardar" method="POST">
		<table><tr><td>
		Nombre</td><td> <input type="text" name="nombre"></td></tr>
		<tr><td>Descripcion </td><td><input type="text" name="des">	</td></tr>		
		<tr><td>Precio </td><td><input type="text" name="precio">	</td></tr>
		<tr><td>Cantidad </td><td><input type="text" name="cantidad">	</td></tr>	
		<tr><td colspan="2"><input type="submit" name="enviado" value="guardar">
</td></tr></table>
</form>
<form  action="eliminar.php" title="Guardar" method="POST">
		<table><tr><td>
		id</td><td> <input type="text" name="nombre"></td></tr>
		<tr><td colspan="2"><input type="submit" name="consultar" value="eliminar">
	</td></tr></table>
</form>
<form  action="update.php" title="Guardar" method="POST">
		<table><tr><td>
		id</td><td> <input type="text" name="id"></td></tr>
		<tr><td>nombre </td><td><input type="text" name="nombre">	</td></tr>		
		<tr><td>Descripcion </td><td><input type="text" name="des">	</td></tr>	
		<tr><td>Precio </td><td><input type="text" name="precio">	</td></tr>
		<tr><td>Cantidad </td><td><input type="text" name="cantidad">	</td></tr>
		<tr><td colspan="2"><input type="submit" name="enviado" value="Actualizar">
</td></tr></table>
</form>




</body>
</html>