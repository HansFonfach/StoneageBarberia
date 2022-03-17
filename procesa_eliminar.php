
<?php

include("funciones/setup.php");
conecta();
session_start();

$Reserva=$_GET['ID_Reserva'];


$sql="DELETE FROM reservas Where ID_Reserva='".$Reserva."'";


$resultado = mysqli_query(conecta(),$sql);


header("Location:ambiente_usuario.php");

mysqli_close($enlace);


	
?>
<script type="text/javascript">
    location.href = "ambiente_usuario.php"
</script>