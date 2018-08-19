<?php 
if(isset($_GET['p'])){
	$pagina = $_GET['p'];
}else{
	$pagina = 'inicio';
}


 ?>

<!DOCTYPE html>
<html >

<head>
	<title>Necesit V1.6</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body  class="container" background="img/fondo2.jpg">
	<header >
		<h2 id="encabezado">Necesit</h2>

	</header>
	<nav>
		<ul class="nav nav-tabs">
		<li <?php if ($pagina == 'inicio')echo 'class="active"'?>><a href="necesit.php?p=inicio">Inicio</a></li>
		<li  <?php if ($pagina == 'servicio')echo 'class="active"'?>><a href="necesit.php?p=servicio">Solicitar Servicio</a></li>
		<li  <?php if ($pagina == 'registrar')echo 'class="active"'?>><a href="necesit.php?p=registrar">Registrar</a></li>
		<li  <?php if ($pagina == 'informes')echo 'class="active"'?>><a href="necesit.php?p=informes">Listado e informes</a></li>
	<li  <?php if ($pagina == 'confUsu')echo 'class="active"'?>><a href="necesit.php?p=confUsu">Configuración del Usuario</a></li>
	<li  <?php if ($pagina == 'confSist')echo 'class="active"'?>><a href="necesit.php?p=confSist">Configuración del Sistema</a></li>
		</ul>
	</nav>
	<section class="hero-unit">
	<article>
		<?php 
			switch ($pagina) {
				case 'inicio':
					# code..
				?>

		<h2>Bienvenidos al inicio de Necesit </h2>
		<p><br>
			<br>
			<br>
			<br>
		En la actualidad la forma de comunicación es más inclinada a la web.  Por lo tanto, se llevó a cabo una plataforma de publicidad para hacer conocer a los trabajadores unipersonales del área de servicios y así facilitar la promoción a aquellas personas que buscan un empleo; por otro lado, ayudará al que busca una persona que ofrezca servicios a obtener una solución en una página web. <br>
		<br> 
		<br>  
		<br>   
		<br></p>				
			<?php
				break;
				case 'servicio':
					# code...
				?>
					<div id="formulario">
		<div class="wrapper"> 
 <div id="formulariocontacto">
 <form  action="guardar.php"  method="POST">
 <h3>Solicitud de Servicio.</h3> 
 <label>
 <input type="text" placeholder="Nombre" name="nombre" id="nombre"  required autofocus="">
 </label>
  <label>
<input type="text" placeholder="Apellido" name="apellido" id="apellido" required >
 </label>
 <label>
 <input type="tel" placeholder="Celular" name="celular" id="celular" required>
 </label>
 <label>
      </div>
    </div>
  </form>
 <label>
 <input type="submit"value="Guardar">
 </form>
 </div>
 </div>
			 </div>

			
			<?php
					break;
				case 'registrar':
					# code..
				?>
						<div><h3>Navegue por los menús,encuentre el servicio adecuado a su necesidad</h3></div> 
	<nav >
		<ul class="nav nav-tabs">
		<li  <?php if ($pagina == 'usuario')echo 'class="active"'?>><a href="necesit.php?p=usuario">Usuario</a></li>
		<li  <?php if ($pagina == 'ciudad')echo 'class="active"'?>><a href="necesit.php?p=ciudad">Ciudad</a></li>
		<li  <?php if ($pagina == 'categoria')echo 'class="active"'?>><a href="necesit.php?p=categoria">Categoria</a></li>
		<li  <?php if ($pagina == 'trabajador')echo 'class="active"'?>><a href="necesit.php?p=trabajador">Trabajador</a></li>
		</ul>
	</nav> 
		<?php 
			break;
			case 'usuario'
			#code...
		 ?>

				<div id="formulario">
		<div class="wrapper"> 
 <div id="formulariocontacto">
 <form  action="guardar.php"  method="POST">
 <h3>Registrese como Usuario del Sistema Necesit.</h3> 
 <label>
 <!-- <span>Nombre:</span> -->
 <input type="text" placeholder="Nombre" name="nombre" id="nombre"  required autofocus="">
 </label>
  <label>
<!--  <span>Apellido:</span>
 --> <input type="text" placeholder="Apellido" name="apellido" id="apellido" required >
 </label>
 <label>
<!--  <span >Celular:</span> 
 --> <input type="tel" placeholder="Celular" name="celular" id="celular" required>
 </label>
 <label>	
<!--  <span>Email:</span>
 --> <input type="email" placeholder="Email" name="email" id="email" required>
 </label>
 <label>
<!--  	<span>Fecha de Nacimiento:</span>  --> 
<input type="date" name="fechaNacimiento">
 </label>
 <label>
<!--  <span>Barrio:</span>
 --> <input type="text" placeholder="Barrio o calle" name="barrio" id="barrio" required >
 </label>
 <label>
<!--   <span>Dirección:</span>--> 
 <input type="text" placeholder="Dirección" name="direccion" id="direccion" required >
 </label>
 	 <label> 
<!--  	<span>Foto de Perfil:</span>
 --> 	<form action="#">
    <div class="file-field input-field">
      <div class="btn">
      <!--       -->
        <input type="file" name="fotoPerfil">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  </form>
 <label>
 <input type="submit"value="Guardar">
 </form>
 </div>
 </div>
			 </div>
<!--  Aqui termina parte formulario Registro Usuario
 -->				<?php
				break;
				case 'ciudad'
					# code...
				?>

							<div id="formulario">
		<div class="wrapper"> 
 <div id="formulariocontacto">
 <form  action="guardar_ciu.php"  method="POST">
 <h3>Registre su Ciudad.</h3> 
		 <label>
 		<input type="text" placeholder="Ciudad" name="ciudad" id="ciudad"  required autofocus="">
 		</label>

  <label>
  	  <input type="text" placeholder="Pais" name="pais" id="pais"  required >
  </label>	
 <input type="submit"value="Guardar">
 </form>
 </div>
 </div>
			 </div>
					<?php
					break;
					case 'categoria':
						# code...

	 ?>
	 		<div id="formulario">
		<div class="wrapper"> 
 <div id="formulariocontacto">
 <form  action="guardar_cat.php"  method="POST">
 <h3>Especifique su Categoria.</h3> 
 <label>

 <input type="" placeholder="Categoria" name="categoria" id="categoria"  required autofocus="">	</label>
 <input type="submit"value="Guardar">
 </form>
 </div>
 </div>
			 </div>


	 <?php
		break;
			case 'trabajador':
				# code...
				 ?>
				 	<div id="formulario">
		<div class="wrapper"> 
 <div id="formulariocontacto">
 <form  action="guardar_trabajador.php"  method="POST">
 <h3>Datos del Trabajador.</h3> 
 <label>
 <input type="text" placeholder="Documento del Trabajador" name="documento" id="documento"required autofocus="">
	 </label>

<label  ><!--el TD sirve para dejar en columnas el elemento  -->
	<br>
	<textarea  rows="4" name="descripcion" id="descripcion" > </textarea>
		</label>
				 <input type="submit"value="Guardar">
		 </form>
	 </div>
 </div>
	 </div>
	 <?php
		break;
		case 'informes':
			# code...
		 ?>
		 	<div><h3>Informes y registros de ultimos servicios</h3></div> 
	<nav >
		<ul class="nav nav-tabs">
<li  <?php if ($pagina == 'listaTrabajador')echo 'class="active"'?>><a href="necesit.php?p=listaTrabajador">Listados de Trabajador</a></li>
	<li  <?php if ($pagina == 'listaUsuario')echo 'class="active"'?>><a href="necesit.php?p=listaUsuario">Listados de Usuarios</a></li>
		<li  <?php if ($pagina == 'listaCategoria')echo 'class="active"'?>><a href="necesit.php?p=listaCategoria"> Listado de Categoria</a></li>
		<li  <?php if ($pagina == 'listaTrabajador')echo 'class="active"'?>><a href="necesit.php?p=listaTrabajador">Informe de servicios</a></li>
		</ul>
	</nav> 

	 <?php
		break;
		// ---------------------------------Listado Usuarios Registrados---------------------------
		case 'listaUsuario':
			# code...
		 ?>
		 		<div><h3>Informes y registros de ultimos servicios</h3></div> 
	<nav >
		<ul class="nav nav-tabs">
<li  <?php if ($pagina == 'listaTrabajador')echo 'class="active"'?>><a href="necesit.php?p=listaTrabajador">Listados de Trabajador</a></li>
	<li  <?php if ($pagina == 'listaUsuario')echo 'class="active"'?>><a href="necesit.php?p=listaUsuario">Listados de Usuarios</a></li>
		<li  <?php if ($pagina == 'listaCategoria')echo 'class="active"'?>><a href="necesit.php?p=listaCategoria"> Listado de Categoria</a></li>
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=informeServicios">Informe de servicios</a></li>
		</ul>
	</nav> 
	<table border="3" color="red">
		<thead>
			<th><a href="necesit.php?p=usuario">Nuevo usuario</a></th> <!--Columnas -->

			<tr> <!--   filasss -->
			<th>Lista de Usuarios</th>   <!--Columnas -->
			</tr>
			
		</thead>
		<tbody>
			<tr>
				<td>Id</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td>Nombre &nbsp&nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td>Apellido &nbsp &nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td>Celular &nbsp&nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td>Email &nbsp&nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td>Fecha Nac. &nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td>Barrio &nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td>Direccion &nbsp</td> <!--Estas leyendo esto con la mente ;v  Nieguen melo -->
				<td>Fecha de Inscripcion &nbsp</td>
			</tr> 
			<?php 
			INCLUDE("conexion.php");

			$query="SELECT * FROM tb_usuario";
			$resultado= $conexion->query($query);
			while ($row=$resultado->fetch_assoc()) {
				# code...
				 ?>
				 <tr>
				 	<td><?php echo $row['usu_id']; ?></td>
				 	<td><?php echo $row['usu_nombre']; ?></td>
				 	<td><?php echo $row['usu_apellido']; ?></td>
				 	<td><?php echo $row['usu_celular']; ?></td> 	
				 	<td><?php echo $row['usu_correo_electronico']; ?></td>
				 	<td><?php echo $row['usu_fecha_nacimiento']; ?></td>
				 	<td><?php echo $row['usu_barrio']; ?></td>
				 	<td><?php echo $row['usu_direccion']; ?></td>
				 	<td><?php echo $row['usu_fecha_inscripcion']; ?></td>
				 </tr>
<!-- ----------------------------fin listado usuario-------------------------------------------->

           <?php
            }
            ?>

		</tbody>
	</table>
		

<!-- 	 ------------------el case default de abajo es del primer switch--------------------------------------------
 -->	 <?php
				break;
					default:
		}
	 ?>
	</article>
	</section>

		<footer class="container" >Grupo Gê V1.6 &copy2018</footer>
	</body>
</html>