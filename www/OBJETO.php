<?php
class carro{
	var $color;
	var $puertas;
	var $marca;
	var $gasolina=0;

	function tanque($gasolinaa){
	$this->gasolina = $this->gasolina + $gasolinaa;
	}

	function adelante(){
	if($this->gasolina>0){
	$this->gasolina = $this->gasolina -1;
	return 'gasolina'.$this->gasolina;

	}
	}
}
$carro = new carro();
$carro->color = "AZUL";
$carro->marca = "TOYOTA";
$carro->puertas = 2;
$carro->adelante();
$carro->adelante();

echo "<br>";

//------------------------EJEMPLO
$miLado = 3;
function areaCuadrado($lado){
    if ($lado < 0){
        // Lanzamos una excepción
        throw new Exception ('Debes insertar un número positivo');
    } else {
        return $lado * $lado;
    }
}
areaCuadrado($miLado);
// Devuelve: Uncaught exception 'Exception' with message 'Debes insertar un número positivo'
// Definimos un array con los lados de los cuadrados que queremos calcular
$misLados = array(-2, 6, 4);
// Creamos un loop para calcular el área de cada cuadrado
foreach ($misLados as $lado){
    try {
        echo "El área del cuadrado es: " . areaCuadrado($lado) . "<br>";
    } catch (Exception $e) {
        echo 'Ha habido una excepción: ' . $e->getMessage() . "<br>";
    }
}
/*
Devuelve:
El área del cuadrado es: 4
Ha habido una excepción: Debes insertar un número positivo
El área del cuadrado es: 16
*/

?>
<br>
<br>
 <hr>
                    <h1 class="intro-text text-center" >El CLIMA</h1>
                    <hr>
                    <br>
                        <form action="OBJETO.php" method="get">
						<input type="text" name="palabra" value="
						<?  echo ($_GET["palabra"]);  ?>"  />
						<input type="submit" name="buscador" value="Buscar"  />
						</form>

						<?php 

						if ($_GET['buscador'])
						{

						$buscar = $_GET['palabra'];

						if (empty($buscar))
						{
						echo "No se ha ingresado ninguna palabra";
						echo "<h1>Clima De <?php echo ($Nombre);?> </h1>";
							echo "<ul>";
							echo "<li>Temperatura :";
							echo "<?php echo($temperatura); ?> &deg;F";
							echo "</li>";
							echo "<li>Presion:";
							echo "<?php echo($presion); ?> hPa";
							echo "</li>";
							echo "<li>Humedad :";
							echo "$humedad ;%";
							echo "</li>";
							echo "<li>Coordenadas :";
							echo "<?php echo($Coordenadas); ?>";
							echo "</li>";
							echo "<li>Precipitacion :";
							echo "<?php echo($precipitacion); ?>";
							echo "</li>";
							echo "</ul>";
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


							echo "<h1>Clima De <?php echo ($Nombre);?> </h1>";
							echo "<ul>";
							echo "<li>Temperatura :";
							echo "<?php echo($temperatura); ?> &deg;F";
							echo "</li>";
							echo "<li>Presion:";
							echo "<?php echo($presion); ?> hPa";
							echo "</li>";
							echo "<li>Humedad :";
							echo "$humedad ;%";
							echo "</li>";
							echo "<li>Coordenadas :";
							echo "<?php echo($Coordenadas); ?>";
							echo "</li>";
							echo "<li>Precipitacion :";
							echo "<?php echo($precipitacion); ?>";
							echo "</li>";
							echo "</ul>";


						}
							?>
							
</body>
</html>


