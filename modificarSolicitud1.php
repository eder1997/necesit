<!DOCTYPE html>
<html>
<head>
	<title>Estado y Revision de Trabajos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<center>
	<div id="formulariocontacto">
 <form  action="modificarSolicitud.php"  method="POST">
 	<?php 
$id= $_REQUEST['id'];
   include("conexion.php");
   	$query="SELECT * FROM tb_solicitud_servicio WHERE sol_id='$id'";
   	$resultado=$conexion->query($query);
   	$row=$resultado->fetch_assoc();

 	 ?>
 	

<h3>Revision de Estados de los Servicios.</h3> 
 <label>
 	<br><br>
 <!-- <span>Nombre:</span> -->
 
 <input type="text" placeholder="Nombre" name="id" id="id" value="<?php echo $row['sol_id']; ?>"  autofocus="" readonly>
 
 <input type="" placeholder="Estado" name="estado" id="estado"  required autofocus=""> <br><br>	</label>
 <input type="submit"value="Guardar" size="16">


 </form>
 </div>
</center>
</body>
</html>