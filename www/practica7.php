<hr>
<h1 class="intro-text text-center" >El CLIMA</h1>
<hr>
<br>
<form action="" method="get">
<input type="text" name="palabra" value="
<?php echo ($_GET["palabra"]); ?>"/>
<input type="submit" name="buscador" value="Buscar" />
</form>
<?php
if ($_GET['buscador'])
{
$buscar = $_GET['palabra'];
if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{
$xml = simplexml_load_file("http://api.openweathermap.org/data/2.5/find?q=$buscar,&units=mexico&type=accurate&mode=xml&APPID=2d86949f87dc1fc9ad59431b130a64ec");
$temperatura = $xml->list->item->temperature["value"];
$presion = $xml->list->item->pressure["value"];
$humedad = $xml->list->item->humidity["value"];
$Coordenadas = $xml->list->item->city->coord["lon"];
$Nombre = $xml->list->item->city["name"];
$precipitacion = $xml->list->item->precipitation["mode"];
}
}
?>
<html>
<head>
<title>CLIMA</title>
</head>
<body>
<h1>Clima De <?php echo ($Nombre);?> </h1>
<ul>
<li>Temperatura :
<?php echo($temperatura); ?> &deg;F
</li>
<li>Presion:
<?php echo($presion); ?> hPa
</li>
<li>Humedad :
<?php echo($humedad); ?>%
</li>
<li>Coordenadas :
<?php echo($Coordenadas); ?>
</li>
<li>Precipitacion :
<?php echo($precipitacion); ?>
</li>
</ul>