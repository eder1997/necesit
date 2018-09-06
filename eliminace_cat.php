<?php 
include("conexion.php");
$id=$_REQUEST['id'];
	$query="DELETE FROM  tb_categoria  WHERE tb_categoria.cat_id='$id'";


	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
		header("location: necesit.php?p=listaCategoria"); //con esta linea me llevara directo a mi lista de cateogria registrados

	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>