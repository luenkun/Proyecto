<?php
$usuario_bd = 'root';

$password_bd = 'root';
$host_bd = 'localhost';
$bd = 'ig31';

$con= mysql_connect($host_bd, $usuario_bd, $password_bd) or die("No se pudo conectar con el servidor MySQL.");
mysql_select_db($bd) or die("Error al abrir la Base de Datos.");

mysql_query('SET CHARACTER SET utf8') or die("Error al establecer el juego de caracteres");

?>