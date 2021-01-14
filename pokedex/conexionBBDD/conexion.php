<?php

	/*$conexion = mysql_connect ("localhost","root", "");
	if (!$conexion) {
	        die('No se pudo conectar: ' . mysql_error());
	}
	
	$db = mysql_select_db("game", $conexion);
	if (!$db) {
	        die ('No se puede usar gamemark : ' . mysql_error());
	}

*/


	
$conexion = new mysqli("localhost", "root", "", "pokemon");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $conexion->host_info . "\n";

/*$mysqli = new mysqli("127.0.0.1", "root", "contraseña", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
*/
//echo $conexion->host_info . "\n";

	
?>