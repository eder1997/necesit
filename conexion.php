<?php 
$conexion = new mysqli ("localhost","root","","db_necesit_final","3306");
if ($conexion) {
	# code...
	//echo "Conexion Exitosa";
}else{
	echo "No hay conexion";
}
 ?>   