<?php

  require 'conexion.php';
  session_start();  
  //Validación de inicio de sesion 
  if (!isset($_SESSION["sesion"]) || $_SESSION["sesion"]!=1) { // isset -> si está definida la variable de inicio de sesión
    
  

  $user=$_SESSION['user'];
  $pass=$_SESSION['pass'];

  
  $sql= "SELECT * FROM usuarios where Usuario='$user' and Contrasena='$pass'" ;
  $resultado = $mysqli->query($sql);
  
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  $usuarioDB = $row['Usuario'];
  if($usuarioDB == '')
  {
    header('Location: index.php?mensaje=loginmal');
  }else{
    $_SESSION["sesion"]=1;
  }
} //cierre del primer if (inicio de sesion)
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
  <h1 align="right"> <a href="index.php"><img src="imagenes/exit.gif" height="53" width="80" alt="Botón"></a></h1>
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
      <form>
      <p>
        <a href="formulariogendarcitas.php"><img src="imagenes/cita.png" width="110" height="110"></a>
       <label> Agendar Citas </label>
       </p>
       <p>
        <a href="formularioconsultarcitas.php"><img src="imagenes/iconobuscar.jpg" width="110" height="110"></a>
       <label> Consultar Citas </label>
       </p>
       <p>
        <a href="formularioconsultarcitas.php"><img src="imagenes/modificarcita.png" width="110" height="110"></a>
       <label> Modificar Citas </label>
       </p>
      <p>
        <a href="formularioconsultarcitas.php"><img src="imagenes/eliminarcita.png" width="110" height="110"></a>
       <label> Eliminar Citas </label>
       </p>
       <p>
        <a href="formularionuevousuario.html"><img src="imagenes/nuevacita.png" width="110" height="110"></a>
       <label> Registrar pacientes </label>
       </p>
      </form>
    </div>
  </div>
</div>

<!--Footer-->
  <legend>
     <h4 style="text-align: right; color: #BDBDBD;">Stiven A Gallego<br>
      Cristian Camilo Arias Henao<br>
      Juan Pablo Castaño<br>
      ALL RIGTH RESERVED<br>
      2020_ AUX SISTEMAS</h4>
      </legend>
</body>
</html>