<?php 
include("conexion.php");

	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$celular= $_POST['celular'];
	$email= $_POST['email'];
	$fechaNacimiento= $_POST['fechaNacimiento'];
	$barrio= $_POST['barrio']; 
	$direccion= $_POST['direccion'];
	$fotoPerfil= $_POST['fotoPerfil'];
	

	$query="INSERT INTO tb_usuario(usu_nombre,usu_apellido,usu_celular,usu_correo_electronico,usu_fecha_nacimiento,usu_barrio,usu_direccion,usu_foto_perfil)VALUES('$nombre','$apellido','$celular','$email','$fechaNacimiento','$barrio','$direccion','fotoPerfil')";
	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>