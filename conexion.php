<?php 
$server ="localhost";
$usuario="root";
$clave="";
$bd="ss";

$conexion = new mysqli($server,$usuario,$clave,$bd);
$conexion -> set_charset("uft-8");
if ($conexion) { 
	echo "";
}else{
	echo "Base de datos no existe";
}
?>