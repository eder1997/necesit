<?php 
if(isset($_GET['p'])){
	$pagina = $_GET['p'];
}else{
	$pagina = 'inicio';
}
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Necesit V1.6</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body background="img/fondo2.jpg" class="container">  <!-- imagen de fomndo de nuestro proyecto -->
  <nav class="deep-purple lighten-1" role="navigation"> <!--aca se coloca la clase con el color al footer de arriba fijo-->
<!--     <div class="nav-wrapper logo-container"><a id="logo-container" href="#" class="brand-logo" >Necesit</a>
 -->      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
		<li <?php if ($pagina == 'inicio')echo 'class="active"'?>><a href="necesit.php?p=inicio">Inicio</a></li>
		<li  <?php if ($pagina == 'servicio')echo 'class="active"'?>><a href="necesit.php?p=servicio">Solicitar Servicio</a></li>
		<li  <?php if ($pagina == 'registrar')echo 'class="active"'?>><a href="necesit.php?p=registrar">Registrar</a></li>
		<li  <?php if ($pagina == 'informes')echo 'class="active"'?>><a href="necesit.php?p=informes">Listado e informes</a></li>
	<li  <?php if ($pagina == 'confUsu')echo 'class="active"'?>><a href="necesit.php?p=confUsu">Configuración del Usuario</a></li>
	<li  <?php if ($pagina == 'confSist')echo 'class="active"'?>><a href="necesit.php?p=confSist">Configuración del Sistema</a></li>
	
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Menú</a></li> <!--menu adaptBLE Para moviles-->
         <li><a href="#"></a></li>
		<li <?php if ($pagina == 'inicio')echo 'class="active"'?>><a href="necesit.php?p=inicio">Inicio</a></li>
		<li  <?php if ($pagina == 'servicio')echo 'class="active"'?>><a href="necesit.php?p=servicio">Solicitar Servicio</a></li>
		<li  <?php if ($pagina == 'registrar')echo 'class="active"'?>><a href="necesit.php?p=registrar">Registrar</a></li>
		<li  <?php if ($pagina == 'informes')echo 'class="active"'?>><a href="necesit.php?p=informes">Listado e informes</a></li>
	<li  <?php if ($pagina == 'confUsu')echo 'class="active"'?>><a href="necesit.php?p=confUsu">Configuración del Usuario</a></li>
	<li  <?php if ($pagina == 'confSist')echo 'class="active"'?>><a href="necesit.php?p=confSist">Configuración del Sistema</a></li>
	
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!--         		aACA VOY A RELIZAR MI PRUEB-->
<section class="">
	<article>
		<?php 
			switch ($pagina) {
				case 'inicio':
					# code..
				?>
			<div class="card-panel blue lighten-4 ">
		<h2 class="blue-text text-darken-2">Bienvenidos al inicio de Necesit </h2>
		</div>
		<p><br>
			<br>
			<br>
			<br class="">
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
 <div class="row">
 <form  action="guardar.php"  method="POST" class="col s12">
 <h3>Solicitud de Servicio.</h3> 
<div class="col s6">
 <label>
 <input type="text" placeholder="Usuario" name="usu_id" id="usu_id"  required autofocus="">
 </label>
  <label>
<input type="text" placeholder="Trabajador" name="tra_id" id="tra_id" required >
 </label>
 <label>
 <input type="tel" placeholder="Observaciones" name="Observaciones" id="" required>
 </label>
 <label>
      </div>
    </div>
    </div>
  </form>
 <label>
 <input type="submit"value="Enviar" class="">
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

				<div id="">
		<div class="wrapper"> 
 <div class="row">
 <form  action="guardar.php"  method="POST" class="col s12">

 <h3>Registrese como Usuario del Sistema Necesit.</h3>
 <div class="container">
 <div class="col s6"> <!--tamaño al los campos-->
 <label>
 <!-- <span>Nombre:</span> -->

 <input type="text" placeholder="Nombre" name="nombre" id="nombre" required autofocus="">
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
 --> 	<form action="#" method="POST">
    <div class="file-field input-field">
      <div class="btn">
         Foto de perfil
        <input type="file" name="fotoPerfil">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
 
    </div>
    <label>
 <input type="submit" value="Guardar">
</label>
    </div> 

  </form>

 </div>
 </form>

 </div>
 </div>
			 </div>
										<!--  Aqui termina parte formulario Registro Usuario-->		
		<?php
				break;
				case 'ciudad'
					# code...
				?>

							<div id="formulario">
		<div class="wrapper"> 
 <div class="row">
 <form  action="guardar_ciu.php"  method="POST" class="col s6"  bc>
 	<div class="">
 	
 <h3>Registre su Ciudad.</h3> 
		 <label>
 		<input type="text" placeholder="Ciudad" name="ciudad" id="ciudad"  required autofocus="">
 		</label>

  <label>
  	  <input type="text" placeholder="Pais" name="pais" id="pais"  required >
  </label>	
 <input type="submit"value="Guardar">
 </div>

 </form>
 </div>
 </div>
			 </div>


<!-- _----------------INICIA LISTA DE CIUDADES_-------------------------- -->
		          	</table>
					<?php
					break;
					case 'categoria':
						# code...

	 ?>
	 		<div id="formulario">
		<div class="wrapper"> 
 <div id="formulariocontacto">
 <form  action="guardar_cat.php"  method="POST" class="container">
 <h3>Especifique su Categoria.</h3> 
 <label>
 	<br><br>

 <input type="" placeholder="Categoria" name="categoria" id="categoria"  required autofocus=""> <br><br>	</label>
 <input type="submit"value="Guardar" size="16">
 </form>
 </div>
 </div>
			 </div>
<!-- 	------------------------------------	aqui se registra el trabajador----------------------- -->
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
	<textarea  rows="4" name="descripcion" id="descripcion" ></textarea>
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
		<li  <?php if ($pagina == 'listaCategoria')echo 'class="active"'?>><a href="necesit.php?p=listaCategoria"> Listado de Categoria</a>
		</li>
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=listaCiudad">Ciudades</a></li>
		<li  <?php if ($pagina == 'listaTrabajador')echo 'class="active"'?>><a href="necesit.php?p=listaTrabajador">Informe de servicios</a></li>
		</ul>
	</nav> 

		 <?php
					break;
					case 'listaCiudad':

	 ?>
	  		<div><h3>Informes y registros de ultimos servicios</h3></div> 
	<nav >
		<ul class="nav nav-tabs">
<li  <?php if ($pagina == 'listaTrabajador')echo 'class="active"'?>><a href="necesit.php?p=listaTrabajador">Listados de Trabajador</a></li>
	<li  <?php if ($pagina == 'listaUsuario')echo 'class="active"'?>><a href="necesit.php?p=listaUsuario">Listados de Usuarios</a></li>
		<li  <?php if ($pagina == 'listaCategoria')echo 'class="active"'?>><a href="necesit.php?p=listaCategoria"> Listado de Categoria</a></li>
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=listaCiudad">Ciudades</a></li>
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=informeServicios">Informe de servicios</a></li>
		</ul>
	</nav> 
	<table border="3" id="tabla-categoria">
		<thead>

			<tr> <!--filasss -->
							<th colspan="1"><a href="necesit.php?p=categoria">Añadir Ciudad</a></th> <!--Columnas -->

			<th rowspan="">Lista de Ciudad</th>   <!--Columnas -->
			</tr>
			
		</thead>
		<tbody>
			<tr>
				<td>Id</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td> &nbsp&nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				
			</tr> 
			<?php 
			INCLUDE("conexion.php");

			$query="SELECT * FROM tb_ciudad";
			$resultado= $conexion->query($query);
			while ($row=$resultado->fetch_assoc()) {
				# code...
				 ?>
				 <tr>
				 	<td><?php echo $row['ciu_id']; ?></td>
				 	<td><?php echo $row['ciu_nombre']; ?></td>
				 	<td><?php echo $row['ciu_pais']; ?></td>
				 	<td><a href="modificarCiu1.php?id=<?php 
				 	echo $row['ciu_id']; ?>">Modificar</a></td> <!-- colocar bien la id :ya sea ciu_id o cat_id -->
				 	<td><a href="eliminace_ciu.php?id=<?php echo $row['ciu_id'];?>">Eliminar</a></td>	

	
<!-- ----------------------------fin listado Ciudad-------------------------------------------->


           <?php
            } //esta llave es del ciclo while que busca valores en la base de datos

            ?>
  		</table>


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
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=listaCiudad">Ciudades</a></li>
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=informeServicios">Informe de servicios</a></li>
		</ul>
	</nav> 
	<table class="table" border="3" id="tabla-usu" class="head" >
		<thead>

			<tr> <!--filasss -->
							<th colspan="1"><a href="necesit.php?p=usuario">Nuevo usuario</a></th> <!--Columnas -->

			<th colspan="8">Lista de Usuarios</th>   <!--Columnas -->
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
				<td colspan="2" rowspan="1">Opciones</td>

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
				 	<td><a href="modificar.php?id=<?php echo $row['usu_id']; ?>">Modificar</a></td>
				 	<td><a href="eliminace.php?id=<?php echo $row['usu_id']; ?>">Eliminar</a></td>
				 </tr>
<!-- ----------------------------fin listado usuario-------------------------------------------->
           <?php
            } //esta llave es del ciclo while que busca valores en la base de datos
            ?>
		</tbody>
	</table>





	 <?php
				break;
				case 'listaCategoria':
			# code...
		 ?>
		 		<div><h3>Informes y registros de ultimos servicios</h3></div> 
	<nav >
		<ul class="nav nav-tabs">
<li  <?php if ($pagina == 'listaTrabajador')echo 'class="active"'?>><a href="necesit.php?p=listaTrabajador">Listados de Trabajador</a></li>
	<li  <?php if ($pagina == 'listaUsuario')echo 'class="active"'?>><a href="necesit.php?p=listaUsuario">Listados de Usuarios</a></li>
		<li  <?php if ($pagina == 'listaCategoria')echo 'class="active"'?>><a href="necesit.php?p=listaCategoria"> Listado de Categoria</a></li>
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=listaCiudad">Ciudades</a></li>
		<li  <?php if ($pagina == 'informeServicios')echo 'class="active"'?>><a href="necesit.php?p=informeServicios">Informe de servicios</a></li>
		</ul>
	</nav> 
	<table border="3" id="tabla-categoria">
		<thead>

			<tr> <!--filasss -->
							<th colspan="1"><a href="necesit.php?p=categoria">Añadir Categoria</a></th> <!--Columnas -->

			<th rowspan="">Lista de Categoria</th>   <!--Columnas -->
			</tr>
			
		</thead>
		<tbody>
			<tr>
				<td>Id</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				<td> &nbsp&nbsp</td> <!-- el &nbsp sirve para dar espacio en blanco a mismas lineas -->
				
			</tr> 
			<?php 
			INCLUDE("conexion.php");

			$query="SELECT * FROM tb_categoria";
			$resultado= $conexion->query($query);
			while ($row=$resultado->fetch_assoc()) {
				# code...
				 ?>
				 <tr>
				 	<td><?php echo $row['cat_id']; ?></td>
				 	<td><?php echo $row['cat_descripcion']; ?></td>
				 	<td><a href="modificarCat1.php?id=<?php echo $row['cat_id']; ?>">Modificar</a></td>
				 	<td><a href="eliminace_cat.php?id=<?php echo $row['cat_id']; ?>">Eliminar</a></td>	
	
<!-- ----------------------------fin listado Categoria-------------------------------------------->
           <?php
            } //esta llave es del ciclo while que busca valores en la base de datos
            ?>
		</tbody>
	</table>
				 <?php
				 	break;
					default:
		}//esta llave es del swhitch de cuando inicia la appweb allaaaaa arriba XD
	 ?>
	 </div>
	</article>
	</section>



    </div>

    <br><br>
  </div>

  <footer class="page-footer deep-purple lighten-1">
    <div class="container">
      <div class="row 351" >
        <div class="col l16 s6">
          <h5 class="white-text">Grupo Gê</h5>
          <p class="grey-text text-lighten-4">Proyecto realizado en base a la materia Taller V de la Facultad de Ciencias y Tecnologias de las Universidad Nacional de Canindeyu.</p>

        </div>
		

        <div class="col l3 s12">
          <h5 class="white-text">Desarrolladores</h5>
          <ul>
            <li><a class="white-text" href="#!">Eder Colman</a></li> <br> <br> <br>
            <li><a class="white-text" href="#!">Guadalupe Ojeda</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"> &nbsp &nbspSiguenos</h5>
          <ul>
            <li><a class="white-text" href="#!"><img src="img/eder.jpg" width="65px" alt="cinthia" /></a></li> <br>
            <li><a class="white-text" href="https://www.facebook.com/guadalupe.ojeda.351/about"><img src="img/cinthia.jpg" width="65px" alt="cinthia" /></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#">Mucho amor y cariño</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
