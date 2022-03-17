
<?php

include("funciones/setup.php");
conecta();
session_start();

$Rut=$_GET['Rut'];
$numero1 = $_GET['Faltas'];

	
$numero2 = 1;
$suma = $numero1 + $numero2;


$sql="UPDATE usuarios SET Faltas=".$suma." WHERE Rut='".$Rut."'";



	mysqli_query(conecta(),$sql);
	
	
?>

<script type="text/javascript">
    location.href = "faltas.php"
</script>