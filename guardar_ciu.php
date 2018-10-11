<?php 
include("conexion.php");

	$ciudad= $_POST['ciudad'];
	$pais= $_POST['pais'];

	$query="INSERT INTO tb_ciudad(ciu_nombre,ciu_pais) VALUES('$ciudad','$pais')";
	$resultado= $conexion-> query($query);
	


	if ($resultado) {
		echo "Inserccion exitosa";
						header("location: necesit.php?p=listaCiudad"); //con esta linea me llevara directo a mi lista 

	}else {

			echo "Inserccion fAllida";
			# code...
		}

 ?>