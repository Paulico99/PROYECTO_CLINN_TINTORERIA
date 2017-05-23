<!DOCTYPE html>

<html>
<head>
	<title>Galeria</title>
	<link rel="stylesheet" href="css1.css">
</head>
<body >
	
<?php
$busqueda=$_POST['nombre'];

try{

	$conexion=new PDO('mysql:host=localhost; dbname=practica9','root','paulico99');
	
	$conexion->exec("SET CHARACTER SET utf8");
	$Cons="DELETE FROM producto WHERE idProducto=:nombre";
	$resul=$conexion->prepare($Cons);

	$resul->execute(array(":nombre"=>$busqueda)); 

	echo ("ELIMINADO CON EXITO !!");

	$resul->closeCursor();

	}
	catch(Excepcion $e){

		die('Error:'. $e->GetMessage());
	}

?>
</body>
</html>
