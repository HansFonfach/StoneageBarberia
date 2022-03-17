
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
      <link rel="stylesheet" href="css/tablascroll.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style3.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/buscartabla.js" type="text/javascript"> </script>

  <meta charset="utf-8">
  </head>

<body background="images/fondo-madera.png" >  

  
      <br>
      <br>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 container">
                            <div class="card">
                                <h2 class="card-header text-center">Administración Faltas</h2>
                                <br>
                                <input type="text " class="form-control container text-center" style="width:20%" id="search" placeholder="Buscar">
                                <?php
              $sql="SELECT * FROM usuarios ";
              $resultado = mysqli_query(conecta(), $sql);
              $registro=mysqli_num_rows($resultado);
            ?>   <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar ">
                                <div class="card-body ">
                                    <table class="table table-striped 
                                    " name="tabla" id="tabla">
                                        <thead>
                                            <tr>
                                                <th scope="col">Rut</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellido</th>
                                                <th scope="col">Faltas</th>
                                                <th scope="col">Acción</th>
                                            </tr>
                                        </thead>
                                         <?php
                while($datos=mysqli_fetch_array($resultado))
                {
              ?>
                                        <tbody>
                                            <tr>
                                                <td bgcolor="#FFFFFF" class="mostrar"><?php if(isset($datos['Rut'])){echo $datos['Rut'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"><?php if(isset($datos['Nombre'])){echo $datos['Nombre'];} ?>&nbsp;&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"><?php if(isset($datos['Apellido'])){echo $datos['Apellido'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"><?php if(isset($datos['Faltas'])){echo $datos['Faltas'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"> <a  href="procesa_falta.php?Rut=<?php echo $datos['Rut']?> & Faltas=<?php echo $datos['Faltas']?>"> <img src="images/agregar.jpg" width="25" height="25"> </a> <a   href="elimina_faltas.php?Rut=<?php echo $datos['Rut']?> & Faltas=<?php echo $datos['Faltas']?>"> <img src="images/check.png" width="25" height="25"></a></td>
       
      
                                            </tr>
                                             <?php
                }
              ?>
                                        </tbody>
                                                                            </table>
                                                                                   
                                </div>

                            </div>
                            <p class="text-center">
              <button type="button"  onclick="location.href='ambiente_administrador.php';"class="btn btn-space text-white " style="background-color: #804000" >Volver</button> </p>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end striped table -->
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
