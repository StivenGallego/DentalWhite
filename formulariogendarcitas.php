
<?php

require 'conexion.php';

// Despegable de  Clientes//
$sqlpaciente="SELECT Nombresp,Identificacionp FROM pacientes ORDER BY Identificacionp ASC" ;
$resultpaciente = $mysqli->query($sqlpaciente); //usamos la conexion para dar un resultado a la variable
 
if ($resultpaciente->num_rows > 0){ //si la variable tiene al menos 1 fila entonces seguimos con el codigo
  $combobitpaciente="";
    while ($rowpaciente = $resultpaciente->fetch_array(MYSQLI_ASSOC)){
    $combobitpaciente .=" <option value='".$rowpaciente['Nombresp']."'>".$rowpaciente['Identificacionp']."</option>";
    
    }
}else{
      $combobitpaciente = "Sin resultados";
}

//CBX para medico

$sqlmedico="SELECT Nombresm,Identificacionm FROM medicos ORDER BY Identificacionm ASC" ;
$resultmedico = $mysqli->query($sqlmedico); //usamos la conexion para dar un resultado a la variable
 
if ($resultmedico->num_rows > 0){ //si la variable tiene al menos 1 fila entonces seguimos con el codigo
  $combobitmedico="";
    while ($rowmedico = $resultmedico->fetch_array(MYSQLI_ASSOC)){
    $combobitmedico .=" <option value='".$rowmedico['Nombresm']."'>".$rowmedico['Identificacionm']."</option>";
    
    }
}else{
      $combobitmedico = "Sin resultados";
}

//CBX ESPECIALIDAD

$sqlespecilidad="SELECT Identificacionm,Especialidadm FROM medicos ORDER BY Especialidadm ASC" ;
$resultespecialidad = $mysqli->query($sqlespecilidad); //usamos la conexion para dar un resultado a la variable
 
if ($resultespecialidad->num_rows > 0){ //si la variable tiene al menos 1 fila entonces seguimos con el codigo
  $combobitespecialidad="";
    while ($rowespecialidad = $resultespecialidad->fetch_array(MYSQLI_ASSOC)){
    $combobitespecialidad .=" <option value='".$rowespecialidad['Identificacionm']."'>".$rowespecialidad['Especialidadm']."</option>";
    
    }
}else{
      $combobitespecialidad = "Sin resultados";
}

?>



<html>
  <head>
    <meta charset="utf-8">
    <title>Home WHITE TEETH</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
  </head>
  
<body >
   <h1 align="right"> <a href="javascript:history.back()"><img src="imagenes/atras.jpg" height="53" width="100" alt="Botón"></a></h1>
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
      <h3 align="center"> Men&uacute; Gesti&oacute;n de Procesos </h3>

      <!--formulario para solicitud de información-->

      <form method="post" action="registrarcita.php">

        <p> <label>Identificaci&oacute;n Paciente</label>
          <select  class="cbx" name="documentopacienteh" required="">
            <option value="Seleccione"> Seleccione Documento</option>
            <?php echo $combobitpaciente;?>
            
          </select>
        </p>

        <p> <label>Identificaci&oacute;n Paciente</label>
          <select class="cbx" name="documentomedicoh" required="">
            <option value="Seleccione"> Seleccione Documento</option>
            <?php echo $combobitmedico;?>
            
          </select>
        </p>

        <p><label>Especialidad Medico</label>
          <select class="cbx" name="especialidadh" required="">
            <option value="Seleccione">Seleccione Especialidad</option>
            <?php echo $combobitespecialidad;?>
            
          </select>
        </p>

        <p>
        <label>Fecha Cita</label>
        <input type="date" name="fechacitah">
        </p>

        <p>
        <label>Hora Cita</label>
        <input type="time" name="horacitah">
      </p><br>

        <button type="submit" value="Enviar">Enviar</button>
        <button type="reset" value="Restablecer">Limpiar</button>
      </form>

    </div>
  </div>
</div>
</body>
</html>
