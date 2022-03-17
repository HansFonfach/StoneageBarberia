<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
            <div class="card-header text-center"><a href=""><img class="logo-img"  heigth="200" width="200" src="images/logo.png" alt="logo"></a><span class="splash-description"></span></div>
            <div class="card-body">
                <form action="procesa_login_administrador.php" method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="Usuario" required="" name="Usuario"type="text" placeholder="Usuario" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="Pass" required="" name="Pass"type="password" placeholder="Contraseña">
                    </div>
                   
                    <button type="submit" class="btn  text-white btn-block" style="background-color: #804000" >Iniciar Sesion</button>
                </form>
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
</body>
 
</html>