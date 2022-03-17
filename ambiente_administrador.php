
<?php
  include("funciones/setup.php");
  session_start();

  if (isset($_SESSION['usuario_sesion2'])) {
    // code...
    if (isset($_GET['Usuario'])) {
      $sql_usu ="SELECT * FROM administradores WHERE Usuario='".$_GET['Usuario']."'";
      $result_usu = mysqli_query(conecta(),$sql_usu);
      $datos_usu = mysqli_fetch_array($result_usu);
    }
?>

<!DOCTYPE html>


  <html>
  <head>
  <tittle></tittle>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style3.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
  <meta charset="utf-8">
  </head>

<body background="images/fondo-madera.png" >  

  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 container">
    <br>
    <br>
                            <!-- ============================================================== -->
                            <!-- hover list  -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <h2 class="card-header text-center " >Administrador</h2>
                             
                                <div class="card-body">
                                    <div class="list-group" >
                                        <a href="reserva.php" class="list-group-item list-group-item-action  text-center">Reservar Cliente </a>
                                        <a href="faltas.php" class="list-group-item list-group-item-action  text-center">Agregar faltas</a>
                                        <a href="usuarios_admin.php" class="list-group-item list-group-item-action text-center">Ver Clientes</a>
                                        <a href="ver_reservas_admin.php" class="list-group-item list-group-item-action text-center">Ver Reservas</a>
                                         <a href="reservas_hoy.php" class="list-group-item list-group-item-action text-center">Ver Reservas Hoy</a>
                                        <a href="cerrar_sesion.php" class="list-group-item list-group-item-action text-center">Cerrar Sesión</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end hoverlist  -->
                            <!-- ============================================================== -->
                        </div>

    

  </body>
  </html>

<?php
}
else{
  header("Location:error.php");
}
?>
