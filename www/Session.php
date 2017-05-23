<?php
	session_start();
	session_unset();
	session_destroy();

	echo "SE CERRO SESSION !!!<br>";
	echo "<a class='text-center' href='Sesiones.php'>...VOLVER...</a>";
?>
