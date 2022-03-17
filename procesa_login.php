<?php
	include("funciones/setup.php");
    $clave=md5($_POST['Pass']);
	$sql="SELECT * FROM usuarios WHERE Rut='".$_POST['Rut']."' and Pass='".$clave."'";
	$resultado = mysqli_query(conecta(), $sql);
	$registro = mysqli_num_rows($resultado);
	$datos = mysqli_fetch_array($resultado);
	
	if($registro!=0)
	{
		session_start();

		$_SESSION['Rut']=$datos['Rut'];
		$_SESSION['usuario_sesion']=$datos['Nombre'];


		$sql2="SELECT Faltas FROM usuarios WHERE Rut='".$_POST['Rut']."'";
		$resultado2 = mysqli_query(conecta(), $sql2);
		$datos2 = mysqli_fetch_array($resultado2);

		if ($datos2[0] == 2	) {
			header("Location:error_faltas.php?=".$datos2);
		}else{
			header("Location:ambiente_usuario.php");
		}
    

	}else{
		echo '<script language="javascript">alert("Usuario y/o Contraseña incorrectos.");
		window.location.href="login.php";
		</script>';
	}

?>
