<?php 
include("conexion.php");

	$ciudad= $_POST['ciudad'];
	$pais= $_POST['pais'];

	$query="INSERT INTO tb_ciudad(ciu_nombre,ciu_pais) VALUES('$ciudad','$pais')";
	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";   ?>

		<?php
	}else {

			echo "Inserccion fAllida";
			# code...
		}

 ?>