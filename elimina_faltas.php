
<?php

include("funciones/setup.php");
conecta();
session_start();

$Rut=$_GET['Rut'];
$numero1 = $_GET['Faltas'];

$reinicio = 0;
$sql="UPDATE usuarios SET Faltas=".$reinicio." WHERE Rut='".$Rut."'";



	mysqli_query(conecta(),$sql);
	
	
?>
<script type="text/javascript">
    location.href = "faltas.php"
</script>