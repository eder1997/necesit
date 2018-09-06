<!DOCTYPE html>
<html>
<head>
	<title>Modificar Categoria</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<center>
	<div id="formulariocontacto">
 <form  action="modificar_cat.php"  method="POST">
 	<?php 
$id= $_REQUEST['id'];
   include("conexion.php");
   	$query="SELECT * FROM tb_categoria WHERE cat_id='$id'";
   	$resultado=$conexion->query($query);
   	$row=$resultado->fetch_assoc();

 	 ?>
 	

<h3>Especifique su Categoria.</h3> 
 <label>
 	<br><br>
 <!-- <span>Nombre:</span> -->
 
 <input type="text" placeholder="Nombre" name="id" id="id" value="<?php echo $row['cat_id']; ?>"  autofocus="" readonly>
 
 <input type="" placeholder="Categoria" name="categoria" id="categoria"  required autofocus=""> <br><br>	</label>
 <input type="submit"value="Guardar" size="16">


 </form>
 </div>
</center>
</body>
</html>