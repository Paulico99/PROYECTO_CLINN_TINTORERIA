<?php 
  // Se conecta al SGBD 
  if(!($iden = mysql_connect("localhost", "wwwdata", ""))) 
    die("Error: No se pudo conectar");
	
  // Selecciona la base de datos 
  if(!mysql_select_db("ejemplo", $iden)) 
    die("Error: No existe la base de datos");
	
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM ejemplo"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $iden); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");
	
  echo '<table>'; 
  while($fila = mysql_fetch_assoc($ejemplo)) 
  { 
    echo '<tr>'; 
    echo '<td>' . $fila['ejemplo_campo'] . '</td><td>' . $fila['ejemplo_campo'] . '</td>'; 
    echo '</tr>'; 
  } 
  echo '</table>';
  
  // Libera la memoria de ejemplo
  mysql_free_result($resultado);
  
  // Cierra la conexión con la base de datos 
  mysql_close($iden); 
?> 
