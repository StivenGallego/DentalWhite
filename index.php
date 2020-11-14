<?php
  session_start();  
  $_SESSION["sesion"]=0;

  if(isset($_GET["mensaje"])) 
  {  
   echo "<h1><img src='imagenes/error.gif' width='80' height='80'>!Usuario/Contraseña incorrecto!</h1>";
  }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Home WHITE TEETH</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	<h1 align="left">Politecnico Mayor - WHITE TEETH</h1>
  <br>
<div class="contenedor">
  <div class="aspecto">
    <div class="barra">
      <h3>Inicio de Sesion </h3>
      

	<form method="post" action="bienvenida.php">
	<label>Usuario</label>
	<input type="text" name="user">
	<label>Contrasena</label>
	<input type="password" name="pass">

	<p class="full-width">
        <button type="submit" value="Aceptar">Ingresar</button>      
    </p><br>
</form>
      
    </div>
    <div class="form">
      <br>
</div>
</div>
</div>
</body>
</html>