<?php 
include("conexion.php");
$id= $_POST['id'];
$descripcion=$_POST['categoria'];

	$query="UPDATE tb_categoria SET cat_descripcion='$descripcion' WHERE tb_categoria.cat_id='$id'";


	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
		header("location: necesit.php?p=listaCategoria"); //con esta linea me llevara directo a mi lista de usuarios registrados

	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>