
<?php

include("funciones/setup.php");
conecta();
session_start();

$Reserva=$_GET['ID_Reserva'];


	



$sql="DELETE FROM reservas Where ID_Reserva='".$Reserva."'";


$resultado = mysqli_query(conecta(),$sql);



?>

<script type="text/javascript">
    location.href = "ver_reservas_admin.php"
</script>