<!DOCTYPE html>

<html>
<head>
	<title>Galeria</title>
	<link rel="stylesheet" href="css1.css">
</head>
<body >
	
<?php
$array_cliente = array('nombre'=> 'Cesar','Edad'=> '21','Genero'=> 'Masculino','Email'=> 'cesarsoto@sisalia.com','localidad'=> 'Mochis','telefono'=> '88181881');

$json_string = json_encode($array_cliente);
$file = 'Cliente.json';
file_put_contents($file,$json_string);

//LEER EL JSON

$datos_cliente = file_get_contents("Cliente.json");
$json_cliente = json_decode($datos_cliente,true);

foreach ($json_cliente as $Cliente) {
	echo $Cliente."<br>";

	# code...
}


$json = '{"A":1,"B":2,"C":3}';

var_dump(json_decode($json));
var_dump(json_decode($json,true));
?>
</body>
</html>
