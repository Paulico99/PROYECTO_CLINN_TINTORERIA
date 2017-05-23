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
	$Cons="select * from producto where nombre= :n_art";
	$resul=$conexion->prepare($Cons);
	$resul->execute(array(":n_art"=>$busqueda)); 
	while($registro=$resul->fetch(PDO::FETCH_ASSOC)){
		echo ("CONSULTA");
		echo "<br>";
		echo("Nombre: ".$registro['Nombre']);
		echo "<br>"; 
		echo ("Descripcion:".$registro['Descripcion']);
		echo "<br>"; 
		echo ("Precio:".$registro['Precio']);
		echo "<br>";
		echo ("Cantidad:".$registro['Cantidad']);
		echo "<br>";

	}
	$resul->closeCursor();
	}catch(Excepcion $e){

		die('Error:'. $e->GetMessage());
	}



?>
</body>
</html>


