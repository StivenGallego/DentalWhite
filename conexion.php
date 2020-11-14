<?php
	//Conexion a l base de datos
	$mysqli=new mysqli("127.0.0.1","root","","white_teeth");
		if(mysqli_connect_errno()){
			echo "Conexion Fallida: ", mysqli_connect_error();
			  exit();
			} else {
				//echo "Conexion Establecida";
			}
?>