<?php
	
include("funciones/setup2.php");
include("funciones/funcs.php");	
	
	$user_id = $mysqli->real_escape_string($_POST['user_id']);
	$token = $mysqli->real_escape_string($_POST['token']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);
	
	if(validaPassword($password, $con_password))
	{
		
		$pass_hash = hashPassword($password);
		
		if(cambiaPassword($pass_hash, $user_id, $token))
		{
			echo '<script language="javascript">alert("Su clave ha sido modificada con exito");
     window.location.href="login.php";
        </script>';
			} else {
			
			echo '<script language="javascript">alert("Hubo un problema al modificar su clave");
     window.location.href="cambia_pass.php";
        </script>';
			
		}
		
		} else {
		
		echo '<script language="javascript">alert("Las claves no son iguales");
     window.location.href="cambia_pass.php";
        </script>';
		
	}
	
?>	