<?php
//Conexión a D.B y Paso de variables
require 'conexion.php';

  $identificacionpacientep=$_POST['documentopacienteh'];

  $identificacionmedicop=$_POST['identificacionmedicoh'];

  $especialidadp=$_POST['especialidadh'];
  $especialidadp= strtoupper($especialidadp);

  $fechacitap=$_POST['fechacitah'];

  $horacitap=$_POST['horacitah'];

  $query ="INSERT INTO citas_medicas (Identificacion_Paciente,Identificacion_Medico, Especialidad_Medico,Fecha_Cita,Hora_Cita) VALUES ('$identificacionpacientep','$identificacionmedicop','$especialidadp','$fechacitap','$horacitap')";


  ?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home WHITE TEETH</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
  </head>

<body>
  <h1 align="center">CENTRO ODONTOLOGICO - WHITE TEETH</h1>
  <br>
<div class="contenedor">
  <div class="aspecto">
    <div class="barra">
      <h3>Cont&aacute;ctanos </h3>
      <ul>
        <li>Número Único: 448 42 27</li>
        <li>312 2659108 - 312 2449820</li>
        <li>Calle 55 N° 42-38 - (Perú con Girardot)</li><br>
      </ul>
      <img src="imagenes/logowhat.png" width="160" height="160">
      <img src="imagenes/logoface.png" width="160" height="160">
      <img src="imagenes/logoinstagram.png" width="160" height="160">
      <img src="imagenes/logoyoutube.png" width="160" height="160">

    </div>

    <div class="form">
      <h3 style="text-align: center; color: #B50104;">WHITE TEETH</h3>
      <br>
      <h3 align="center"> Men&uacute; Gesti&oacute;n de Procesos </h3><br>
      <form method="post" action="principal.php">
      <p class="full-width">

      <?php
        $resultado=$mysqli->query($query);

        if($resultado>0){
          echo "<h1><img src='imagenes/ok.gif' width='50' height='50'>!CIta  Registrada Satisfactoriamente!</h1>";
        }else{
          echo "<h1><img src='imagenes/error.gif' width='50' height='50'>¡Error al Registrar Cita!</h1>";
        }
      ?>

      
    </p>
    <p class="full-width">
        <button type="submit" value="Aceptar">Aceptar</button>      
    </p>     
  </form>
</div>
</div>
</div>
</body>
</html>

