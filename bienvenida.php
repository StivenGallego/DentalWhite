<?php

  require 'conexion.php';
  session_start();  

  if (!isset($_SESSION["sesion"]) || $_SESSION["sesion"]!=1) { // isset -> si está definida la variable de inicio de sesión
    
  

  $user=$_POST['user'];
  $pass=$_POST['pass'];

  
  $sql= "SELECT * FROM usuarios where Usuario='$user' and Contrasena='$pass'" ;
  $resultado = $mysqli->query($sql);
  
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  $usuarioDB = $row['Usuario'];
  if($usuarioDB == '')
  {
    header('Location: index.php?mensaje=loginmal');
  }else{
    $_SESSION["sesion"]=1;
      echo "<h1><img src='imagenes/session.gif' width='600' height='600'></h1>";
    
    header('Refresh:4,URL= principal.php');
  }

  $_SESSION["user"]=$user;
  $_SESSION["pass"]=$pass;

 
}


?>