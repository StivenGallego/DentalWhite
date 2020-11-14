<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  $Id_Cita=$_POST['Id_Citah'];

  //Paso de Variables 'POST' del Formulario Registro
  $identificacionpacientep=$_POST['documentopacienteh'];

  
  $identificacionmedicop=$_POST['identificacionmedicoh'];


  $especialidadp=$_POST['especialidadh'];
  $especialidadp= strtoupper($especialidadp);

  $fechacitap=$_POST['fechacitah'];

  $horacitap=$_POST['horacitah'];

  $sql="UPDATE citas_medicas SET Identificacion_Paciente='$Id_Cita', Identificacion_Medico='$identificacionmedicop',Especialidad_Medico='$especialidadp',Fecha_Cita='$fechacitap',Hora_Cita='horacitap' WHERE Identificacion_Paciente='$Id_Cita'";

  

?>


<!--HTML-->

<html>
  <head>
    <meta charset="utf-8">
    <title>Home WHITE TEETH</title>
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
    </div>
    <form method="post" action="principal.php">
    <div class="form">
      <h3 style="text-align: center; color: #B50104;">WHITE TEETH</h3>
      <br>
      <h3 align="center"> Modificar Citas </h3>

      <?php

        $resultado=$mysqli->query($sql);
        if($resultado>0){
          echo "<h1><img src='imagenes/ok.gif' width='50' height='50'>¡Datos de la Cita Actualizados con Éxito!</h1>";
        }else{
          echo "<h1><img src='imagenes/error.gif' width='50' height='50'>¡Error Al Actualizar Datos de la Cita! </h1>";
        }
      ?>

      <p class="full-width">
        <button type="submit" value="Aceptar">Aceptar</button>      
    </p>
</div>
</form>
</div>
</div>
</body>
</html>