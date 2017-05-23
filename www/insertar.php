<!DOCTYPE html>

<html>
<head>
	<title>Galeria</title>
	<link rel="stylesheet" href="css1.css">
</head>
<body >
	
<?php
$busqueda=$_POST['nombre'];
$busqueda_des=$_POST['des'];
$busqueda_precio=$_POST['precio'];
$busqueda_cantidad=$_POST['cantidad'];
try{

	$conexion=new PDO('mysql:host=localhost; dbname=practica9','root','paulico99');
	
	$conexion->exec("SET CHARACTER SET utf8");
	$Cons="insert into  producto  (Nombre,Descripcion,Precio,Cantidad) values ( :nombre,:descripcion,:precio,:cantidad)";
	$resul=$conexion->prepare($Cons);

	$resul->execute(array(":nombre"=>$busqueda,":descripcion"=>$busqueda_des,":precio"=>$busqueda_precio,":cantidad"=>$busqueda_cantidad)); 

	echo ("Guardado con exito" . $busqueda);

	$resul->closeCursor();

	}
	catch(Excepcion $e){

		die('Error:'. $e->GetMessage());
	}

?>
</body>
</html>


