
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
      <link rel="stylesheet" href="css/tablascroll.css">

      
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/buscartabla.js" type="text/javascript"> </script>



 
  <meta charset="utf-8">
  </head>

<body background="images/fondo-madera.png" >  


  

                  <br>
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">

                            <h2 class="card-header text-center">Clientes Registrados</h2> <br> <input type="text " class="form-control container text-center" style="width:20%" id="search" placeholder="Buscar">
                           
                                              <?php
              $sql="SELECT * FROM usuarios ";
              $resultado = mysqli_query(conecta(), $sql);
              $registro=mysqli_num_rows($resultado);
            ?>
                        
                                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar ">

                                  <div class="form-group">


</div>
                                    <table class="table table-striped table-bordered container first" name="tabla" id="tabla">
                                        <thead>
                                            <tr>
                                                <th>Rut</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Telefono</th>
                                               
                                            </tr>
                                        </thead>
                                        
                                         <?php
                while($datos=mysqli_fetch_array($resultado))
                {
              ?>
                                        <tbody>
                                            <tr>
                                                <td bgcolor="#FFFFFF" class="mostrar"> <img  width="30" heigth="30"src="images/logo.png"><?php if(isset($datos['Rut'])){echo $datos['Rut'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"><?php if(isset($datos['Nombre'])){echo $datos['Nombre'];} ?>&nbsp;&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"><?php if(isset($datos['Apellido'])){echo $datos['Apellido'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"><?php if(isset($datos['Telefono'])){echo $datos['Telefono'];} ?>&nbsp;</td>
         
                                            </tr>

                                             <?php
                }
              ?>



                                        </tbody>

                                      </table>

                                      <br>  
                                     
                                      
                                </div>
                                 
                            
  <p class="text-center">
              <button type="button"  onclick="location.href='ambiente_administrador.php';"class="btn btn-space text-white " style="background-color: #804000" >Volver</button> </p>
                             
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
