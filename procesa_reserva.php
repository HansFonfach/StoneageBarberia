<?php
	include("funciones/setup.php");
	conecta();
	session_start();


$Rut=$_POST['Rut'];
$id_barbero=$_POST['barbero']; 
$id_horario=$_POST['hora']; 
$servicio=$_POST['servicio'];     
$fecha=$_POST['fecha'];
$estado='inactivo';



$sql = "INSERT INTO reservas (Rut, ID_Barbero, ID_Horario, Servicio, Fecha, Estado) VALUES ('".$Rut."',".$id_barbero.",".$id_horario.",".$servicio.",'".$fecha."','".$estado."')";


$resultado = mysqli_query(conecta(),$sql);
    $registro=mysqli_num_rows($resultado);


if(!$resultado){
	header("Location:reserva.php?sql");
	

}else{
	header("Location:reserva_exito_admin.php");
	

}


mysqli_close($enlace);



?>