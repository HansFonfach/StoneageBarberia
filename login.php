<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
  

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



    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body background="images/fondo-madera.png" >



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
       <h2><p>Estimados clientes, te informamos que debido a una nueva actualización de sistema tu nueva clave para poder ingresar es "stoneage2021", no obstante, te recomendamos cambiar tu clave. </p></h2>
       

  
      </div>
      <a> 
      <div class="modal-footer">
      <button type="button" class="btn text-white"  style="background-color: #804000" data-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>


    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img"  heigth="200" width="200" src="images/logo.png" alt="logo"> <br> <br></a><span class="splash-description">Porfavor ingresa tu información</span></div>
            <div class="card-body">
                <form action="procesa_login.php" method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="Rut" required="" name="Rut"type="text" placeholder="Rut" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="Pass" required="" name="Pass"type="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Recordarme</span>
                        </label>
                    </div>
                    <button type="submit" class="btn  text-white btn-block" style="background-color: #804000" >Iniciar Sesion</button>
                       
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="
                    registro.php" class="footer-link">Crear nueva cuenta</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="recuperarclave.php" class="footer-link">Olvidé la contraseña</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


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