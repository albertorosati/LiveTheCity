<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>LiveTheCity | Vivi la tua città</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">





    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">LiveThe<b>City</b></a>
            <small>Accedi ad un mondo nuovo di possibilità</small>
        </div>
		
		<?php if (isset($_GET['e'])) {
				echo '
			<div class="alert alert-warning">
                                <strong>Oops!</strong> Le credenziali da te inserite non sono corrette. Riprova.
                            </div>';
			}
			
			if (isset($_GET['logut'])) {
				echo '
			<div class="alert alert-success">
                                <strong>Tutto ok!</strong> Il logout è avvenuto con successo!
                            </div>';
			}
			?>
		
        <div class="card">
            <div class="body">
                <form id="sign_in" action="login.php" method="POST">
                    <div class="msg">Inserisci i tuoi dati</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Ricordami</label>
                        </div>
                        <div class="col-xs-4">
                            <input type="submit" class="btn btn-block bg-pink waves-effect" type="submit" value="ACCEDI">
                        </div>
                    </div>
					<button style="width: 100%; margin-bottom: 10px;" type="button" class="btn bg-default waves-effect">
					
                                    <img src="images/google.png" width="30px">
                                    <span>ACCEDI CON GOOGLE</span>
                                </button>

                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="signup.php">Registrati adesso!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="#">Password dimenticata</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>