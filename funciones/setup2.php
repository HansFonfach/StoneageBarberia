
<?php


	$mysqli=new mysqli("","cst51073", "X9k]:[*?W:U(r@w", "cst51073_reservas");

	 //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>	
