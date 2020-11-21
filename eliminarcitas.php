<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  $Id_Cita=$_GET['id'];

  $sql="DELETE FROM citas_medicas  WHERE Identificacion_Paciente='$Id_Cita'"; //sintaxis SQL para eliminar registros de la tabla
  
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Home WHITE TEETH  pruebaas</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
  </head>
  
<body >
  <h1 align="center">CENTRO ODONTOLOGICO - WHITE TEETH</h1>
  <br>
<div class="contenedor">
  <div class="aspecto">
    <div class="barra">
      <h3>Cont&aacute;ctanos </h3>
      <ul>
        <li>Número Único: 448 42 27</li>
        <li>312 2659108 - 312 2449820</li>
        <li>Calle 55 N° 42-38 - (Perú con Girardot)</li>
      </ul>
      <img src="imagenes/logowhat.png" width="160" height="160">
      <img src="imagenes/logoface.png" width="160" height="160">
      <img src="imagenes/logoinstagram.png" width="160" height="160">
      <img src="imagenes/logoyoutube.png" width="160" height="160">
    </div>
    <div class="form">
      <h3 style="text-align: center; color: #B50104;">WHITE TEETH</h3>
      <br>
      <h3 align="center"> Eliminar Citas </h3>

      <!--PHP para que me elimine los datos en la D.B-->
      <form method="post" action="principal.php">
      <?php

        $resultado=$mysqli->query($sql);
        if($resultado>0){

          echo "<h1><img src='imagenes/ok.gif' width='50' height='50'>!Cliente Eliminado Satisfactoriamente!</h1>";

        }else{

          echo "<h1><img src='imagenes/error.gif' width='50' height='50'>¡Error al Eliminar el Cliente!</h1>";
        }
      ?>
      <p class="full-width">
        <button type="submit" value="Aceptar">Aceptar</button>      
    </p>   
</form>
</div>
</div>
</div>
</body>
</html>