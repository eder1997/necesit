<?php 
include("conexion.php");
$id=$_REQUEST['id'];
	$query="DELETE FROM  tb_usuario  WHERE tb_usuario.usu_id='$id'";


	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
		header("location: necesit.php?p=listaUsuario"); //con esta linea me llevara directo a mi lista de usuarios registrados

	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>