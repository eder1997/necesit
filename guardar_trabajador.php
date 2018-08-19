<?php 
include("conexion.php");

	$documento= $_POST['documento'];
	$descripcion= $_POST['descripcion'];

	$query="INSERT INTO tb_trabajador(tra_documento,tra_descripcion)VALUES('$documento','$descripcion')";
	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
	}else {
			echo "Inserccion fAllida";
			# code...
		}


// FALTA VER XQ NO INSERTA EN La tABLA Y LA BD
 ?>