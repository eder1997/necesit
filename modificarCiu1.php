<!DOCTYPE html>
<html>
<head>
	<title>Modificar Ciudad</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<center>
	<div class="row">
 <form  action="modificar_ciu.php"  method="POST">
 	
 	<?php 
$id= $_REQUEST['id'];
   include("conexion.php");
   	$query="SELECT * FROM tb_ciudad WHERE ciu_id='$id'";
   	$resultado=$conexion->query($query);
   	$row=$resultado->fetch_assoc();

 	 ?>

<h3>Actualize su Ciudad.</h3> 
 <label>
 	<br><br>
 <!-- <span>Nombre:</span> -->
 
 <input type="text" placeholder="Nombre" name="id" id="id" value="<?php echo $row['ciu_id']; ?>"  autofocus="" readonly>
 </label>
 <label> 
 	<input type="" placeholder="Ciudad" name="ciudad" id="ciudad"  required autofocus=""> <br><br>	</label>
 	<label> 
 	<input type="" placeholder="Pais" name="Pais" id="pais"  required > <br><br>	</label>
 <input type="submit"value="Actualizar" size="16">


 </form>
 </div>
</center>
</body>
</html>