
<!DOCTYPE html>
<html>
<head>
<tittle>Stoneage Barberia</tittle>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/comprobar_usu.js"> </script>
    <script src="js/validarnumeric.js" type="text/javascript"> </script>
    

   <script src="js/jquery-3.4.0.min.js" type="text/javascript"> </script>



<meta charset="utf-8">

</head>

<body background="images/fondo-madera.png" >


 <form id= "form1" class="splash-container" action="procesa_registro.php" method="POST">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-1">Registro de Clientes.</h2>
                <p>Porfavor ingresa tu información</p>
            
            </div>
            <div class="card-body">
                <div class="form-group">
         Rut
                    <input class="form-control form-control-lg" type="text" name="Rut"  maxlength="10" required="" placeholder="Ejemplo: 19301809-2"   autocomplete="off" >
                    
                </div>
                   <div class="form-group">
                    Nombre
                    <input class="form-control form-control-lg" type="text" name="Nombre" required=""  maxlength="15"placeholder="" autocomplete="off">
                </div>
                Apellido
                   <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="Apellido" maxlength="15"required="" placeholder="" autocomplete="off">
    
                </div>
                Email
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="Email" maxlength="40" required="" placeholder="" autocomplete="off">
                </div>
                Celular
                 <div class="form-group">
                    <input class="form-control form-control-lg validanumericos" value="" type="text" name="Telefono" maxlength="11"  required="" placeholder="Ejemplo: 987654321" autocomplete="off" >
                </div>
                Contraseña
                <div class="form-group">
                    <input class="form-control form-control-lg" id="" type="password" id="Pass" name="Pass" maxlength="10" required="" minlength="6" placeholder="">
               
                </div>
               Confirmar Contraseña
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" id="Pass2" name="Pass2" maxlength="10" required="" minlength="6" placeholder="">
                   
                </div>
               
               
                <div class="form-group pt-2">
                     <button type="submit" class="btn  text-white btn-block" style="background-color: #804000" >Registrarme</button>
                </div>
                
              
            <div class="card-footer bg-white">
                <p>Si ya estás registrado <a href="login.php" class="text-secondary   ">Ingresa aquí</a></p>
            </div>
        </div>
    </form>




</form>


</body>
</html>