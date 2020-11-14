<?php
//Conexión a D.B y Paso de variables
require 'conexion.php';

  $identificacionpacientep=$_POST['documentopacienteh'];

 $nombrepacientep=$_POST['nombrepacienteh'];
 $nombrepacientep= strtoupper($nombrepacientep);

 $apellidopacientep=$_POST['apellidopacienteh'];
 $apellidopacientep= strtoupper($apellidopacientep);

 $fechanacimientop=$_POST['fechanacimientopacienteh'];
 
 $telefonopacientep=$_POST['telefonopacienteh'];
 
 $direccionpacientep=$_POST['direccionpacienteh'];
 $direccionpacientep= strtoupper($direccionpacientep);

 $ciudadpacientep=$_POST['ciudadpacienteh'];
 $ciudadpacientep= strtoupper($ciudadpacientep);

  $query ="INSERT INTO pacientes (Identificacionp,Nombresp, Apellidosp,Fecha_nacimientop,Telefonop,Direccionp,ciudadp) VALUES ('$identificacionpacientep','$nombrepacientep','$apellidopacientep','$fechanacimientop','$telefonopacientep','$direccionpacientep','ciudadpacientep')";


  ?>

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
      <img src="imagenes/logowhat.png" width="160" height="160">
      <img src="imagenes/logoface.png" width="160" height="160">
      <img src="imagenes/logoinstagram.png" width="160" height="160">
      <img src="imagenes/logoyoutube.png" width="160" height="160">
    </div>
    <div class="form">
      <h3 style="text-align: center; color: #B50104;">WHITE TEETH</h3>
      <br>
      <h3 align="center"> Registro Nuevo Paciente </h3>

      <?php
        $resultado=$mysqli->query($query);

        if($resultado>0){
          echo "<h1><img src='imagenes/ok.gif' width='50' height='50'>!Paciente Registrado con Éxito!</h1>";
        }else{
          echo "<h1><img src='imagenes/error.gif' width='50' height='50'>¡Error al Registrar Paciente!</h1>";
        }
      ?>

      <p class="full-width">
        <button  onclick="location.href='principal.php'" type="submit" value="Aceptar" >Aceptar</button>      
    </p>  
</div>
</div>
</div>
</body>
</html>


