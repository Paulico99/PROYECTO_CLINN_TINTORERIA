<?php

$host = "localhost"; 	//TU HOST//
$dbuser = "root";	 	//TU USUARIO DEL HOST//
$dbpwd = "paulico99";	//TU CONTRASEÑA//
$db = "bd_banco";		//TU BASE DE DATOS//

$connect = mysql_connect($host, $dbuser, $dbpwd);
if(!$connect)
echo ("No se pudo conectar a la base de datos");
else
$select = mysql_select_db("bd_banco");
?>

<?php
                    include ("config.php");
                    ?>

                    <form action="index.php" method="get">
                    <input type="text" name="palabra" value="
                    <?php  echo ($_GET["palabra"]);  ?>"  />
                    <input type="submit" name="buscador" value="Buscar"  />
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

                    $sql = "SELECT * FROM empleado WHERE NOMBRE LIKE '%$buscar%'";
                    $result = mysql_query($sql,$connect);


                    $total = mysql_num_rows($result);

                    if ($row = mysql_fetch_array($result)) {

                    echo "Resultados para: $buscar";
                    echo "<br>"; 
                    echo "Total de resultados: $total";
                    echo "<br>"; 
                    do {
                    ?> 
                    <br>
                    <br>
                    (Id: <?php echo $row['IDEMPLEADO']; ?>) - <?php echo $row['NOMBRE'];  ?> - <?php echo $row['AP_PATERNO']; ?> - <?php echo $row['AP_MATERNO']; ?>
                    <?php
                    }
                    while ($row = mysql_fetch_array($result));
                    }
                    else
                    {
                    echo "No se encontraron resultados para: $buscar";
                    }
                    }
                    }
                    ?>
