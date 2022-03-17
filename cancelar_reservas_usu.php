
<?php
include("funciones/setup.php");
session_start();

if (isset($_SESSION['usuario_sesion'])) {
    // code...
  if (isset($_GET['Rut'])) {
    $sql_usu ="SELECT * FROM usuarios WHERE Rut='".$_GET['Rut']."'";
    $result_usu = mysqli_query(conecta(),$sql_usu);
    $datos_usu = mysqli_fetch_array($result_usu);
}

  






?>
<!DOCTYPE html>
  <html>
  <head>
  <tittle></tittle>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style3.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">

    <script src="js/jquery-3.2.1.min.js"></script>
 
 
  </head>

<body background="images/fondo-madera.png" >  

<h1 class="text-white text-center container"> </h1>
  

                    <div class="row ">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">

                            <h2 class="card-header text-center">Mis Reservas</h2>
                           
                                              <?php
                                            
$fechahoy = date("Y/m/d");
                                             

   $sql="SELECT ID_Reserva, usuarios.Rut, usuarios.Nombre, usuarios.Apellido, usuarios.Telefono, barberos.Nombre AS Barbero, servicios.Nombre AS Servicio, horarios.Horas, reservas.Fecha
FROM usuarios
INNER JOIN reservas ON usuarios.Rut=reservas.Rut
INNER JOIN barberos ON reservas.ID_Barbero = barberos.ID_Barbero
INNER JOIN servicios ON reservas.Servicio = servicios.ID_Servicio
INNER JOIN horarios ON reservas.ID_Horario = horarios.ID_Horario
WHERE usuarios.Rut ='".$_SESSION['Rut']."' AND Fecha >= '$fechahoy' ORDER BY Fecha DESC";



              $resultado = mysqli_query(conecta(), $sql);
              $registro=mysqli_num_rows($resultado);
            ?>



                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Reserva</th>
                                                <th>Barbero</th>
                                                <th>Servicio</th>
                                                <th>Hora</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        
                                         <?php
                while($datos=mysqli_fetch_array($resultado))
                {
              ?>
                                        <tbody>
                                            <tr>
                                               <td  class="mostrar">  <img  width="30" heigth="30"src="images/logo.png"><?php if(isset($datos['ID_Reserva'])){echo $datos['ID_Reserva'];} ?>&nbsp;</td>
                                                <td  class="mostrar"><?php if(isset($datos['Barbero'])){echo $datos['Barbero'];} ?>&nbsp;</td>
                
                    <td  class="mostrar"><?php if(isset($datos['Servicio'])){echo $datos['Servicio'];} ?>&nbsp;</td>
                      <td  class="mostrar"><?php if(isset($datos['Horas'])){echo $datos['Horas'];} ?>&nbsp;</td>
                        <td  class="mostrar"><?php if(isset($datos['Fecha'])){echo $datos['Fecha'];} ?>&nbsp;</td>
           

               <td bgcolor="#FFFFFF" class="mostrar"> <a  href="procesa_eliminar.php?ID_Reserva=<?php echo $datos['ID_Reserva']?> " > <img src="images/cancelar.png" width="25" height="25"> </a> </td>
                                            </tr>
                                             <?php
                }
              ?>

                                        </tbody>

                                      </table>


                                </div>
                                <br>
                                 

                                  <p class="text-center">
              <button type="button"  onclick="location.href='ambiente_usuario.php';"class="btn btn-space text-white " style="background-color: #804000" >Volver</button> </p>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->

  </body>
  </html>
  <?php
}
else{
  header("Location:error.php");
}
?>