<?php 
include("conexion.php");

	$categoria= $_POST['categoria'];

	$query="INSERT INTO tb_categoria(cat_descripcion) VALUES('$categoria')";
	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>