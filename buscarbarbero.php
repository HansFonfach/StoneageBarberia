<?php
	include("funciones/setup.php");
	conecta();
	 date_default_timezone_set("America/Santiago");
$fecha=$_GET['fecha'];

echo $fecha;



$fechaNueva = date('Y-m-d', strtotime(str_replace('/', '-', $fecha)));




	

$result = mysqli_query(conecta(), "SELECT (ELT(WEEKDAY('$fechaNueva') + 1, 'Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo')) AS Dia");
$row = mysqli_fetch_array($result);
$max = $row[0];

echo $max;



	echo '<label for="input-select">Barbero</label>';
	echo '<select name="barbero"class="form-control" required="" id="barbero">';
	echo  '<option value="0">Seleccione Barbero</option>';




$consulta="SELECT DISTINCT barberos.ID_Barbero, barberos.Nombre, barberos.Apellido 
           FROM barberos
           
           INNER JOIN dia_hora_barbero ON barberos.ID_Barbero = dia_hora_barbero.ID_Barbero
           WHERE Dia = '$max'  AND barberos.ID_Barbero NOT IN (SELECT ID_Barbero FROM fechasbloqueadas
	 WHERE '".$fechaNueva."' BETWEEN Fecha_Inicio AND Fecha_Fin) ORDER BY barberos.ID_Barbero DESC ";


$resultado=mysqli_query(conecta(),$consulta);
  
  while($datos=mysqli_fetch_array($resultado))
		{
  ?>
  <option value="<?php echo $datos['ID_Barbero'];?>"> <?php echo $datos['Nombre'].' '.$datos['Apellido'];?> </option>

  <?php
		}


	
	
	echo '</select>';
	
	


	


	
	
?>