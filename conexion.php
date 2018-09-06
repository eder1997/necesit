<?php 
$conexion = new mysqli ("localhost","root","","db_necesit","3306");
if ($conexion) {
	# code...
	//echo "Conexion Exitosa";
}else{
	echo "No hay conexion";
}
 ?>   