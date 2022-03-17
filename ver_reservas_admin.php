
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/buscartabla.js" type="text/javascript"> </script>

 
  <meta charset="utf-8">
  </head>

<body background="images/fondo-madera.png" >  

<h1 class="text-white text-center container"> </h1>

 <input type="text " class="form-control container text-center" style="width:20%" id="search" placeholder="Buscar">

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Alejandro</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Johann</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Jesse</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><div class="row ">

  <!-- ============================================================== -->
  <!-- basic table  -->
  <!-- ============================================================== -->
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">


      <h2 class="card-header text-center">Reserva de clientes Alejandro</h2>
      <br>
     

      <?php
  date_default_timezone_set("America/Santiago");
      $hora = date('H:i');
      echo $hora;

      $sql="SELECT ID_Reserva,  usuarios.Rut, usuarios.Nombre, usuarios.Apellido, usuarios.Telefono,  servicios.Nombre AS Servicio, horarios.Horas, reservas.Fecha
      FROM usuarios
      INNER JOIN reservas ON usuarios.Rut=reservas.Rut
      INNER JOIN servicios ON reservas.Servicio = servicios.ID_Servicio
      INNER JOIN horarios ON reservas.ID_Horario = horarios.ID_Horario
      WHERE ID_Barbero = 1
      ORDER BY Fecha, reservas.ID_Horario ASC";

      $resultado = mysqli_query(conecta(), $sql);
      $registro=mysqli_num_rows($resultado);
      ?>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered first " name="tabla" id="tabla" >
            <thead>
              <tr>
               <th>ID_Reserva</th>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Telefono</th>
             
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
                <td  class="mostrar"> <img  width="30" heigth="30"src="images/logo.png"><?php if(isset($datos['ID_Reserva'])){echo $datos['ID_Reserva'];} ?>&nbsp;</td>
                <td  class="mostrar"> <?php if(isset($datos['Rut'])){echo $datos['Rut'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Nombre'])){echo $datos['Nombre'];} ?>&nbsp;&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Apellido'])){echo $datos['Apellido'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Telefono'])){echo $datos['Telefono'];} ?>&nbsp;</td>
           
                <td  class="mostrar"><?php if(isset($datos['Servicio'])){echo $datos['Servicio'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Horas'])){echo $datos['Horas'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Fecha'])){echo $datos['Fecha'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"> <a  href="elimina_reservas_admin.php?ID_Reserva=<?php echo $datos['ID_Reserva']?> "> <img src="images/cancelar.png" width="25" height="25"> </a> </td>

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
  </div>
</div></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><div class="row ">
  <!-- ============================================================== -->
  <!-- basic table  -->
  <!-- ============================================================== -->
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">

      <h2 class="card-header text-center">Reserva de clientes Johann</h2>
      <br>
      

      <?php
      $sql="SELECT ID_Reserva,  usuarios.Rut, usuarios.Nombre, usuarios.Apellido, usuarios.Telefono,  servicios.Nombre AS Servicio, horarios.Horas, reservas.Fecha
      FROM usuarios
      INNER JOIN reservas ON usuarios.Rut=reservas.Rut
      INNER JOIN servicios ON reservas.Servicio = servicios.ID_Servicio
      INNER JOIN horarios ON reservas.ID_Horario = horarios.ID_Horario
      WHERE ID_Barbero = 2
      ORDER BY Fecha, reservas.ID_Horario ASC";
      ;

      $resultado = mysqli_query(conecta(), $sql);
      $registro=mysqli_num_rows($resultado);
      ?>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered first " name="tabla" id="tabla" >
            <thead>
              <tr>
               <th>ID_Reserva</th>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Telefono</th>
              
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
                <td  class="mostrar"> <img  width="30" heigth="30"src="images/logo.png"><?php if(isset($datos['ID_Reserva'])){echo $datos['ID_Reserva'];} ?>&nbsp;</td>
                <td  class="mostrar"> <?php if(isset($datos['Rut'])){echo $datos['Rut'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Nombre'])){echo $datos['Nombre'];} ?>&nbsp;&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Apellido'])){echo $datos['Apellido'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Telefono'])){echo $datos['Telefono'];} ?>&nbsp;</td>
              
                <td  class="mostrar"><?php if(isset($datos['Servicio'])){echo $datos['Servicio'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Horas'])){echo $datos['Horas'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Fecha'])){echo $datos['Fecha'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"> <a  href="elimina_reservas_admin.php?ID_Reserva=<?php echo $datos['ID_Reserva']?> "> <img src="images/cancelar.png" width="25" height="25"> </a> </td>

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
  </div>
</div></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><div class="row ">
  <!-- ============================================================== -->
  <!-- basic table  -->
  <!-- ============================================================== -->
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">

      <h2 class="card-header text-center">Reserva de clientes Jesse</h2>
      <br>
      

      <?php
      $sql="SELECT ID_Reserva,  usuarios.Rut, usuarios.Nombre, usuarios.Apellido, usuarios.Telefono,  servicios.Nombre AS Servicio, horarios.Horas, reservas.Fecha
      FROM usuarios
      INNER JOIN reservas ON usuarios.Rut=reservas.Rut
      INNER JOIN servicios ON reservas.Servicio = servicios.ID_Servicio
      INNER JOIN horarios ON reservas.ID_Horario = horarios.ID_Horario
      WHERE ID_Barbero = 3
      ORDER BY Fecha, reservas.ID_Horario ASC";

      $resultado = mysqli_query(conecta(), $sql);
      $registro=mysqli_num_rows($resultado);
      ?>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered first " name="tabla" id="tabla" >
            <thead>
              <tr>
               <th>ID_Reserva</th>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Telefono</th>
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
                <td  class="mostrar"> <img  width="30" heigth="30"src="images/logo.png"><?php if(isset($datos['ID_Reserva'])){echo $datos['ID_Reserva'];} ?>&nbsp;</td>
                <td  class="mostrar"> <?php if(isset($datos['Rut'])){echo $datos['Rut'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Nombre'])){echo $datos['Nombre'];} ?>&nbsp;&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Apellido'])){echo $datos['Apellido'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Telefono'])){echo $datos['Telefono'];} ?>&nbsp;</td>
              
                <td  class="mostrar"><?php if(isset($datos['Servicio'])){echo $datos['Servicio'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Horas'])){echo $datos['Horas'];} ?>&nbsp;</td>
                <td  class="mostrar"><?php if(isset($datos['Fecha'])){echo $datos['Fecha'];} ?>&nbsp;</td>
                <td bgcolor="#FFFFFF" class="mostrar"> <a  href="elimina_reservas_admin.php?ID_Reserva=<?php echo $datos['ID_Reserva']?> "> <img src="images/cancelar.png" width="25" height="25"> </a> </td>

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
  </div>
</div></div>
</div>

  


  <!-- ============================================================== -->
  <!-- end basic table  -->
  <!-- ============================================================== -->

 <script src="js/bootstrap.min.js"></script>
  </body>
  </html>

  
<?php
}
else{
  header("Location:error.php");
}
?>