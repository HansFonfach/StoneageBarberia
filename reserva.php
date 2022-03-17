
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
     <!--BOOTSTRAP 4-->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <!--JQUERY-->

    <!--CALENDAR-->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.css" />
    <script src="js/validar_form_registro.js" type="text/javascript"></script>
    <meta charset="utf-8">
   




  </head>

  <body background="images/fondo-madera.png" >

    
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 container">
      <div class="card">
        <h2 class="card-header text-center">Reservar Hora</h2>
        <div class="card-body">
          <form id="form" name="form"  method="post" action="procesa_reserva.php">
            Fecha
            <div class="form-group">
              <input class="form-control" name="fecha" id="datepicker"  required=""  readonly="" placeholder="Seleccione Fecha" /> 
            </div>
            <div class="form-group">
              Rut
              <input class="form-control form-control-lg" id="Rut" maxlength="10" required="" name="Rut"type="text"  placeholder="Rut cliente" autocomplete="off" onBlur="comprobarUsuario()">
              <span id="estadorut" ></span>
              
<script>
function comprobarUsuario() {
  
  jQuery.ajax({
  url: "ComprobarDisponibilidad.php",
  data:'Rut='+$("#Rut").val(),
  type: "POST",
  success:function(data){
    $("#estadorut").html(data);
   
  },
  error:function (){}
  });
}
</script>
            <script>
$(function() {
    $( "#datepicker" ).datepicker(
    {
minDate: 0,

      closeText: 'Cerrar',
currentText: 'Hoy',
monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
weekHeader: 'Sm',
dateFormat: 'yy-mm-dd',
firstDay: 1,
isRTL: false,
showMonthAfterYear: false,

        beforeShowDay: function(d) {
            var day = d.getDay();
            return [(day != 0 )];
        }
    });
  });
  </script>

            </div>
            <div class="form-group" >
              <label for="input-select">Barbero</label>
              <select name ="barbero"class="form-control" required="" id="barbero">
               <option value="0">Seleccione Barbero</option>


               <?php
               $sql = "SELECT *
               from barberos
               ";
               $resultado = mysqli_query(conecta(), $sql);
               while($datos=mysqli_fetch_array($resultado))
               {
                ?>

                <option value="<?php echo $datos['ID_Barbero'];?>"> <?php echo $datos['Nombre'].' '.$datos['Apellido'];?> </option>
                <?php

              }
              echo '';
              ?>
            </select>
          </div>
         
          <div class="form-group">
            <label for="input-select">Hora</label>
            <select name="hora"class="form-control" id="hora">
              <option value="0">Seleccione hora</option>
              
            </select>
          </div>

          <div class="form-group" >
            <label for="input-select">Servicio</label>
            <select name="servicio" class="form-control" id="servicio">
             <option value="0">Seleccione Servicios</option>
             <div class="dropdown-divider"></div>
               <?php
               $sql = "SELECT *
               from servicios
               ";
               $resultado = mysqli_query(conecta(), $sql);
               while($datos=mysqli_fetch_array($resultado))
               {
                ?>

                <option value="<?php echo $datos['ID_Servicio'];?>"> <?php echo $datos['Nombre']?> </option>
                <?php

              }
              echo '';
              ?>
           </select>
         </div>

         <div class="row pt-2 pt-sm-5 mt-1">

          <div class="container">
            <p class="text-center">
              <button type="button" class="btn btn-space text-white " style="background-color: #804000" onclick="validar (this.value)"> Reservar</button>
                          <input type="hidden" name="accion" id="accion" /> 
        
              <button type="button" onclick="location.href='ambiente_administrador.php';" class="btn btn-space btn-dark ">Cancelar</button>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  <!--JS-->
  <script type="text/javascript"> 

    $('#barbero').on("change", function(){
      var fecha= $('#datepicker').val();
      var barbero=$('#barbero').val();
       
      $.ajax({
        url:"horas.php?fecha="+fecha+"&barbero="+barbero,
        type:"GET",
        data: {},
        success:  function (data) {
          $('#hora').html('');
           $('#hora').html(data);
        }
      })
    });
$('#datepicker').on("change", function(){
      $('#barbero').val(0);
      $('#hora').val(0);
      $('#servicio').val(0);
    });
  

  </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
else{
  header("Location:error.php");
}
?>
