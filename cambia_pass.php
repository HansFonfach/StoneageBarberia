<?php
	
include("funciones/setup2.php");
include("funciones/funcs.php");
	
	if(empty($_GET['user_id'])){
		header('Location: index.html');
	}
	
	if(empty($_GET['token'])){
		header('Location: index.html');
	}
	
	$user_id = $mysqli->real_escape_string($_GET['user_id']);
	$token = $mysqli->real_escape_string($_GET['token']);
	
	if(!verificaTokenPass($user_id, $token))
	{

	}
	
	
?>

<html>
	<head>
		 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cambiar contraseña</title>
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
	</head>


<body background="images/fondo-madera.png" >
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
   

    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img"  heigth="200" width="200" src="images/logo.png" alt="logo"> <br> <br></a><span class="splash-description">Porfavor ingrese su nueva clave</span></div>
            <div class="card-body">    

				<form id="loginform" class="form-horizontal" role="form" action="guarda_pass.php" method="POST" autocomplete="off">
					
					<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
					
					<input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />

               Contraseña
                <div class="form-group">
                    <input class="form-control form-control-lg" id="" type="password" id="Pass" name="password" maxlength="" required="" minlength="6" placeholder="Nueva Contraseña">
               
                </div>
               Confirmar Contraseña
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" id="Pass2" name="con_password"maxlength="" required="" minlength="6" placeholder=" Repetir contraseña">
                   
                </div>


                    <button type="submit" class="btn  text-white btn-block" style="background-color: #804000" >Modificar</button>
                       
                </form>
                  
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





