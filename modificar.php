<!DOCTYPE html>
<html>
<head>
	<title>Modificar Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<center>
	<div id="formulariocontacto">
 <form  action="modificarse.php"  method="POST">
		<?php 
		$id=$_REQUEST['id'];
			include("conexion.php");

			$query="SELECT * FROM tb_usuario WHERE usu_id='$id'";
			$resultado= $conexion->query($query);
		$row=$resultado->fetch_assoc();
				# code...
				 ?>

 <h3>Actualize sus Datos del Sistema Necesit.</h3> 
 <label>
 <!-- <span>Nombre:</span> -->
 
 <input type="text" placeholder="Nombre" name="id" id="id" value="<?php echo $row['usu_id']; ?>"  autofocus="" readonly>
 </label>
 <label>
 <!-- <span>Nombre:</span> -->

 <input type="text" placeholder="Nombre" name="nombre" id="nombre" value="<?php echo $row['usu_nombre']; ?>"  autofocus="">
 </label>
  <label>
<!--  <span>Apellido:</span>
 --> <input type="text" placeholder="Apellido" name="apellido" id="apellido" value="<?php echo  $row['usu_apellido']; ?>" required >
 </label>
 <label>
<!--  <span >Celular:</span> 
 --> <input type="tel" placeholder="Celular" name="celular" id="celular" value="<?php echo  $row['usu_celular']; ?>" required>
 </label>
 <label>
<!--  <span>Barrio:</span>
 --> <input type="text" placeholder="Barrio o calle" name="barrio" id="barrio"  value="<?php echo  $row['usu_barrio']; ?>" required >
 </label>
 <label>
<!--   <span>Dirección:</span>--> 
 <input type="text" placeholder="Dirección" name="direccion" id="direccion"  value="<?php echo  $row['usu_direccion']; ?>" required >
 </label>
 	 <label> 
<!--  	<span>Foto de Perfil:</span>
 --> 	<form action="#">
<!--     <div class="file-field input-field">
      <div class="btn">
        <input type="file" name="fotoPerfil"  value=<?php echo row['']; ?>>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div> -->
  </form>
 <label>
 <input type="submit"value="Guardar">


 </form>
 </div>
</center>
</body>
</html>