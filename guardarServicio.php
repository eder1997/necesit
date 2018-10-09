<?php 
include("conexion.php");

	$usu_id= $_POST['usu_id'];
	$tra_id= $_POST['tra_id'];
	$sol_observacion= $_POST['sol_observacion'];


	$query="INSERT INTO tb_solicitud_servicio(usu_id,tra_id,sol_observacion
,sol_fecha_inicio) VALUES('$usu_id','$tra_id','$sol_observacion',NOW())";
	$resultado= $conexion-> query($query);

	if ($resultado) {

		echo "Inserccion exitosa";
						header("location: necesit.php?p=informeServicios"); //con esta linea me llevara directo a mi lista 


	}else {

			echo "Inserccion fAllida";
			# code...
		}

 ?>