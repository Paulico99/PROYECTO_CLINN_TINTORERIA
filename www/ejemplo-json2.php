<!DOCTYPE html>

<html>
<head>
	<title>Galeria</title>
	<link rel="stylesheet" href="css1.css">
</head>
<body >
	
<?php
$array_cliente = arrar('nombre'=> 'Cesar','Edad'=> '21','Genero'=> 'Masculino','Email'=> 'cesarsoto@sisalia.com','localidad'=> 'Mochis','telefono'=> '88181881');

$json_string = json_encode($array_cliente);
$file = 'Cliente.json';
file_put_contents($file,$json_string);

?>
</body>
</html>
