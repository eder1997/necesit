<?php 
include("conexion.php");
$id= $_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular= $_POST['celular'];
$barrio= $_POST['barrio'];
$direccion= $_POST['direccion'];

	$query="UPDATE tb_usuario SET usu_nombre='$nombre', usu_apellido='$apellido',usu_celular='$celular',usu_barrio='$barrio',usu_direccion='$direccion' WHERE tb_usuario.usu_id='$id'";


	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
		header("location: necesit.php?p=listaUsuario"); //con esta linea me llevara directo a mi lista de usuarios registrados

	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>