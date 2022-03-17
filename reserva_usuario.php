<?php
include("funciones/setup.php");
session_start();

if (isset($_SESSION['usuario_sesion'])) {
    // code...
  if (isset($_GET['Usuario'])) {
    $sql_usu ="SELECT * FROM usarios WHERE Rut='".$_GET['Rut']."'";
    $result_usu = mysqli_query(conecta(),$sql_usu);
    $datos_usu = mysqli_fetch_array($result_usu);
  }
  
  ?>


  <!DOCTYPE html>


  <html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tittle></tittle>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <!--JQUERY-->
<script src="js/comprobar_usu.js"> </script>
   <script src="js/validar_form_registro.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style2.css" rel="stylesheet">
 
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.css" />





    
  </head>

  <body background="images/fondo-madera.png">
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Stoneage Barbería le informa</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h3><p>Estimado(a):  </p></h3>
       <h2><p>Estimados clientes, te informamos que nuestro nuevo local se encuentra ubicado en Vicuña Mackenna y Portales 799, para más información contactate con Alejandro Robledo +569 96817505. </p></h2>
       

  
      </div>
      <a> 
      <div class="modal-footer">
      <button type="button" class="btn text-white"  style="background-color: #804000" data-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 container">
      <div class="card">
        <h2 class="card-header text-center">Reservar Hora</h2>
        <div class="card-body">
          <form id="form" name="form"  method="post" action="procesa_reserva_usu.php">
            Fecha
            <div class="form-group">

             <input class="form-control" name="fecha" id="datepicker"  required=""  readonly="" placeholder="Seleccione Fecha" /> 
              




            </div>
            <div class="form-group" >
              <label for="input-select">Barberos</label>
              <select name ="barbero"class="form-control" id="barbero" >

               <option value="0" >Seleccione Barbero</option>

               
            </select>
          </div>
         
          <div class="form-group">
            <label for="input-select">Horas Disponibles</label>
            <select name="hora"class="form-control" id="hora">
              <option value="0">Seleccione hora</option>
              
            </select>
          </div>

          <div class="form-group" >
            <label for="input-select">Servicios</label>
            <select name="servicio" class="form-control" id="servicio">
             <option value="0">Seleccione el Servicio</option>
               <?php
               $sql = "SELECT *
               from servicios" ;
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


                


             <input type="hidden" name="Rut" id="Rut" value="<?php $_SESSION['Rut']?>" />
 <button type="button" onclick="location.href='ambiente_usuario.php';" class="btn btn-space btn-dark ">Cancelar</button>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  <!--JS-->
<script>
$(function() {
    $( "#datepicker" ).datepicker(
    {
minDate: 0,
maxDate: '+25d',
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
  
 <!--JS-->
  <script type="text/javascript"> 

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
      //$('#barbero').val(0);
    var fecha= $('#datepicker').val();
    var barbero=$('#barbero').val();
    $.ajax({
        url:"buscarbarbero.php?fecha="+fecha+"&barbero="+barbero,
        type:"GET",
        data: {},
        success:  function (data) {
          $('#barbero').html('');
           $('#barbero').html(data);
        }
      }) 
      $('#hora').val(0);
      $('#servicio').val(0);
    });

  </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--script para javascript para que carga el modal -->
<script>
        
   $(document).ready(function()
   {
      $("#Modal").modal("show");
   });
</script>

</body>
</html>

<?php
}
else{
  header("Location:error.php");
}
?>
