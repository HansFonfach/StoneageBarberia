<?php
  include('funciones/setup.php');

  $hoy = date("Y-m-d");



  $sql ="select u.Email from usuarios u, reservas r where u.Rut = r.Rut and r.Fecha = '$hoy'";
  if ($result = mysqli_query(conecta(), $sql)) {
    /* obtener el array asociativo */
    while ($row = mysqli_fetch_row($result)) {
      //  printf ("%s\n", $row[0], $row[1] );
      $destino= $row[0];
      $mensaje= 'Stoneage Barbería le recuerda que hoy tiene una hora reservada, en caso de no poder asistir, favor de cancelar la hora con anticipación", $mensaje);
    }
  }
  /* liberar el conjunto de resultados */
  mysqli_free_result($result);
?>
