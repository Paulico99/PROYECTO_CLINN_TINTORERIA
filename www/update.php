<!DOCTYPE html>

<html>
<head>
	<title>Galeria</title>
	<link rel="stylesheet" href="css1.css">
</head>
<body >
	
<?php
$busquedaid=$_POST['id'];

$busqueda=$_POST['nombre'];
$busqueda_des=$_POST['des'];
$busqueda_precio=$_POST['precio'];
$busqueda_cantidad=$_POST['cantidad'];
try{

	$conexion=new PDO('mysql:host=localhost; dbname=practica9','root','paulico99');
	
	$conexion->exec("SET CHARACTER SET utf8");
	$Cons="update  producto set  Nombre=:nombre,Descripcion=:descripcion,Precio=:precio,Cantidad=:cantidad where idProducto=:id";
	$resul=$conexion->prepare($Cons);

	$resul->execute(array(":id"=>$busquedaid,":nombre"=>$busqueda,":descripcion"=>$busqueda_des,":precio"=>$busqueda_precio,":cantidad"=>$busqueda_cantidad)); 

	echo ("ACTUALIZACION CON EXITO");

	$resul->closeCursor();

	}
	catch(Excepcion $e){

		die('Error:'. $e->GetMessage());
	}

?>
</body>
</html>


