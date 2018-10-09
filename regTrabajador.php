<?php 
include("conexion.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 	<title>Registrar datos del trabajador</title>
 </head>
 <body class="container">
 	<h1>Registrar datos del trabajador</h1>
 <form action="guardar_trabajador.php"  method="POST"> <br>
 	 			 <h3>Datos del Trabajador.</h3> 

 		 <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
  </div>
 <div class="container">
 <div class="s6">
  <br>
 <label >
 <input type="text" placeholder="Doc Trabajador" name="documento" id="documento"required autofocus="">
	 </label>
	<textarea  rows="4" name="descripcion" id="descripcion" ></textarea>
		</label>
				 <input type="submit"value="Guardar">

 		</select>




 </form>
 </body>
 </html>