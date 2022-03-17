<?php

include("funciones/setup2.php");
include("funciones/funcs.php");

$errors = array();

if(!empty($_POST))
{

$email = $mysqli->real_escape_string($_POST['email']);

   if(!isEmail($email))
   {
    $errors[] = "Debe ingresar un email válido.";
   }
    if(emailExiste($email))
    {
       $user_id = getValor('Rut','Email', $email);
       $nombre  = getValor('Nombre','Email', $email);
       $token = generaTokenPass($user_id); 

       $url ='http://stoneagebarberia.cl/cambia_pass.php?user_id='.$user_id.'&token='.$token;


       $asunto= 'Recuperar Password - Sistema de Usuarios';
       $cuerpo= "Hola $nombre: <br /> <br /> Se ha solicitado un reinicio de contraseña.<br /> <br /> Para restaurar la contraseña, visita la siguiente dirección: <a href='$url'>'$url</a>'";

         if(enviarEmail($email, $nombre, $asunto, $cuerpo))

         {


     echo '<script language="javascript">alert("Hemos enviado un correo electronico a su dirección de correo para restablecer su clave");
     window.location.href="login.php";
        </script>';
     exit;

         }else{

        $errors[]="Error al enviar Email";
           }

    }else{

    $errors[] = "No existe el correo electronico";
   }


}









?>



<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recuperar contraseña</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
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
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img"  heigth="200" width="200" src="images/logo.png" alt="logo"> <br> <br></a><span class="splash-description">Porfavor ingrese su correo</span></div>
            <div class="card-body">    
<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" maxlength="40" required="" placeholder="Correo" autocomplete="off">
                </div>
                    <button type="submit" class="btn  text-white btn-block" style="background-color: #804000" >Enviar Correo</button>
                       
                </form>
                  <?php echo resultBlock($errors); ?>
            </div>
         
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>



   