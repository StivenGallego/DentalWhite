<?php

	//Establezco conexion con la D.B
  require 'conexion.php';

  	//sintaxis SQL para que me muestre los registros guardados en la D.B

  		$sql= "SELECT * FROM citas_medicas";
  			$resultado = $mysqli->query($sql);
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
      <h3 align="center"> Citas Registradas en Sistema </h3>
      <br>
      <!--Esta tabla es para que los datos qe están en la D.B pasen a esta interfaz-->

      <table>
        <tr>
          <th> </th>
          <th> </th>
          <th>Identificaci&oacute;n Paciente</th>
          <th>Identificaci&oacute;n m&eacute;dico</th>
          <th>Especialidad</th>
          <th>Fecha Cita</th>
          <th>Hora Cita</th>
        </tr>

        <!--PHP para que envie resultado a la D.B-->
        <?php 
        while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { 

        	?>

          <tr>
            <td><a href="formulariomodificarcitas.php?id=<?php echo $row['Identificacion_Paciente'];?>"><img src="imagenes/iconoeditar.png" width="30" height="30"> </a></td>

            <td><a href="eliminarcitas.php?id=<?php echo $row['Identificacion_Paciente'];?>"><img src="imagenes/iconoeliminar.png" width="30" height="30"> </a></td>

            <td><?php echo $row['Identificacion_Paciente'];?></td>
            <td><?php echo $row['Identificacion_Medico'];?></td>
            <td><?php echo $row['Especialidad_Medico'];?></td>
            <td><?php echo $row['Fecha_Cita'];?></td>
            <td><<?php echo $row['Hora_Cita'];?></td>
          </tr> 

        <?php 
    } 
    ?>

</table>
</div>
</div>
</div>
</body>
</html>