<?php 
include("conexion.php");
$id=$_POST['id'];
$solEstado=$_POST['estado'];
if ($solEstado===2 || $solEstado==3 || $solEstado==4) {
		$query="UPDATE tb_solicitud_servicio SET sol_estado ='$solEstado',sol_fecha_fin= NOW() WHERE tb_solicitud_servicio.sol_id='$id'";

	# code...
}else{

		$query="UPDATE tb_solicitud_servicio SET sol_estado ='$solEstado' WHERE tb_solicitud_servicio.sol_id='$id'";

}


	$resultado= $conexion-> query($query);

	if ($resultado) {
		echo "Inserccion exitosa";
		header("location: necesit.php?p=informeServicios"); //con esta linea me llevara directo a mi lista de usuarios registrados

	}else {

			echo "Inserccion fAllida";
			# code...
		}



 ?>