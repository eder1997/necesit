<?php 
include("conexion.php");
$id=$_REQUEST['id'];
	$query="DELETE FROM  tb_ciudad  WHERE tb_ciudad.ciu_id='$id'";


	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
		header("location: necesit.php?p=listaCiudad"); //con esta linea me llevara directo a mi lista de ciudades registrados

	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>