<?php 
include("conexion.php");

	//$usu_id= $_POST['id'];
	$documento= $_POST['documento'];
	$descripcion= $_POST['descripcion'];

	$query="INSERT INTO tb_trabajador (tra_documento,tra_descripcion,usu_id) VALUES ('$documento','$descripcion')";
	$resultado= $conexion-> query($query);

	$trabajador= $conexion->insert_id;
	foreach ($categorias as $cat) {
		$query2= "INSERT INTO tb_categoria_trabajador (tra_id,cat_id) VALUES ('$trabajador','$cat')"
	 $conexion-> query($query2);

		# code...
	}

	if ($resultado) {
		echo "Inserccion exitosa";
	}else {
			echo "Inserccion fAllida";
			# code...
		}



// FALTA VER XQ NO INSERTA EN La tABLA Y LA BD
 ?>