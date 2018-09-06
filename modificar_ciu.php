<?php 
include("conexion.php");
$id=$_POST['id'];
$ciudad=$_POST['ciudad'];

$pais=$_POST['pais'];

	$query="UPDATE tb_ciudad SET ciu_nombre='$ciudad',ciu_pais='$pais' WHERE tb_categoria.cat_id='$id'";


	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
		header("location: necesit.php?p=listaCategoria"); //con esta linea me llevara directo a mi lista de usuarios registrados

	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>