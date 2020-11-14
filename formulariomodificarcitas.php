<?php

  $Id_Cita=$_GET['id'];

  require 'conexion.php'; //conexión a D.B

 
  $sql= "SELECT * FROM citas_medicas WHERE Identificacion_Paciente='$Id_Cita'"; //sintaxis sql 
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);

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
    <div class="form">
      <h3 style="text-align: center; color: #B50104;">WHITE TEETH</h3>
      <br>
      <h3 align="center"> Modificar Citas </h3>

      <!--formulario para solicitud de información-->

      <form method="post" action="modificarcita.php">

        <p> <label>Identificaci&oacute;n Paciente</label>
        <input type="number" name="documentopacienteh" value="<?php echo $row ['Identificacion_Paciente']?>"> <!--para que me pase de HTML a PHP, tomando como referencia lo qe tengo en la D.B-->
        </p>

        

        <p>
        <label>Identificaci&oacute;n M&eacute;dico</label>
        <input type="number" name="identificacionmedicoh" value="<?php echo $row['Identificacion_Medico']?>">
        </p>

        
        <p>
        <label>Especialidad</label>
        <input type="text" name="especialidadh" value="<?php  echo $row['Especialidad_Medico']?>">
        </p>

        <p>
        <label>Fecha Cita</label>
        <input type="date" name="fechacitah" value="<?php echo $row['Fecha_Cita']?>">
        </p>

        <p>
        <label>Hora Cita</label>
        <input type="time" name="horacitah" value="<?php echo $row['Hora_Cita']?>">
      </p>
      <p>
        <input type="hidden" name="Id_Citah" value="<?php echo $Id_Cita;?>"> <!-- para que me oculte el indice de llamado-->
        </p><br>

        <button type="submit" value="Enviar">Modificar</button>
        
      </form>

    </div>
  </div>
</div>
</body>
</html>
