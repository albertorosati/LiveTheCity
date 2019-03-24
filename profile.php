<?php
session_start();
if(!isset($_SESSION['email'])) {
	header('Location: index.php');
	exit();
}
?>
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
	    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
	



    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
		    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Caricamento...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                                <a class="navbar-brand" href="home.php" style="display: inline"><img src="images/logo.png" style="width: 5%; display: inline"> LiveTheCity</a>
            </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICHE</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 nuovi membri</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 minuti fa
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Simone Badiali</b> - nuovo annuncio</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 ore fa
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Giorgio</b> - nuovo annuncio</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 ore fa
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Visualizza tutte le notifiche</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- MESSAGGI -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">message</i>
                            <span class="label-count">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">MESSAGGI</li>
                            <li class="body">
                                <ul class="menu MESSAGGI">
                                    <li>
                                        <a href="chat.php">
                                            <div class="chat_people">
                <div class="chat_img"> <img src="images/82.jpg" style="border-radius: 50%; max-width:100%;" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Giorgio Mocci <span class="chat_date">24 Mar</span></h5>
                  <p>Grazie, attenderò suo risposte :)</p>
                </div>
              </div>

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="chat.php">Mostra tutti i messaggi</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# MESSAGGI -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/images/profpics/<?php echo $_SESSION['profile_pic'];?>.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nome']. " " . $_SESSION['cognome'];?></div>
                    <div class="email">Quartiere <b>Mancasale</b></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile.php?user=me"><i class="material-icons">person</i>Profilo</a></li>
                            <li><a href="my_neighbourhood.php"><i class="material-icons">account_balance</i>Il mio quartiere</a></li>
							<li role="separator" class="divider"></li>
                            <li><a href="index.php?logut"><i class="material-icons">input</i>Esci</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGAZIONE</li>
                    <li>
                        <a href="home.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
					<li>
                        <a href="new.php">
                            <i class="material-icons">add</i>
                            <span>Pubblica Annuncio</span>
                        </a>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">near_me</i>
                            <span>Annunci</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="offerte.php">Offerte</a>
                            </li>
                            <li>
                                <a href="richieste.php">Richieste</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="events.php">
                            <i class="material-icons">event</i>
                            <span>Eventi</span>
                        </a>
                    </li>
					<li>
                        <a href="tourism.php">
                            <i class="material-icons">flight_takeoff</i>
                            <span>Turismo Esperienziale</span>
                        </a>
                    </li>
					<li>
                        <a href="car_sharing.php">
                            <i class="material-icons">directions_car</i>
                            <span>Car Sharing</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">LiveTheCity</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    
	
	
	<section class="content">
	
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="/images/profpics/<?php echo $_SESSION['profile_pic'];?>.jpg" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?php echo $_SESSION['nome']." ".$_SESSION['cognome'];?></h3>
                                <p><?php echo $_SESSION['professione'];?></p>
                            </div>
                        </div>
                        <div class="profile-footer">
						<button class="btn btn-primary btn-lg waves-effect btn-block">MODIFICA PROFILO</button>
                        </div>
                    </div>
					
					<div class="card card-about-me">
                        <div class="header">
                            <h2>BANDIERINE</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title col-red font-bold">
                                        <i class="material-icons">flag</i>
                                        Utente Avanzato
                                    </div>
                                    <div class="content">
                                        Hai preso parte a 12 eventi
                                    </div><div class="progress">
									<div class="progress-bar bg-red progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 20%"></div>
									 
                            </div><small>8 eventi al prossimo obiettivo</small>
                                </li>
                                <li>
                                    <div class="title col-green font-bold">
                                        <i class="material-icons">flag</i>
                                        Ambasciatore
                                    </div>
                                    <div class="content">
                                        Hai aiutato con successo 17 persone
                                    </div><div class="progress">
									<div class="progress-bar bg-green progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 70%"></div>
									 
                            </div><small>3 aiuti al prossimo obiettivo</small>
                                </li>
                                <li>
                                    <div class="title col-blue font-bold">
                                        <i class="material-icons">flag</i>
                                        Uomo dall'ingegno multiforme
                                    </div>
                                    <div class="content">
                                        Hai pubblicato 13 offerte
                                    </div>
									<div class="progress">
                                <div class="progress-bar bg-blue progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 30%"></div>
									 
                            </div><small>7 offerte al prossimo obiettivo</small>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card card-about-me">
                        <div class="header">
                            <h2>INFORMAZIONI</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">library_books</i>
                                        Istruzione
                                    </div>
                                    <div class="content">
                                        Laurea in Ingegneria Informatica presso UNIBO con 110 e lode
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Quartiere
                                    </div>
                                    <div class="content">
                                        Mancasale
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">edit</i>
                                        Abilità
                                    </div>
                                    <div class="content">
									<?php
									
									$pieces = explode(";", $_SESSION['skills']);
									$colors = array("red", "green", "orange", "pink", "yello", "teal");
									$i = 0;
									foreach ($pieces as $skill) {
										echo '<span class="label bg-'.$colors[$i].'">'.$skill.'</span>'."\r\n";
										$i++;
									}
									
									?>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">notes</i>
                                        Descrizione
                                    </div>
                                    <div class="content">
                                        Esperto nel settore IT e Comunicazioni, free-lancer e sviluppatore attivo per Microsoft.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#offerta" aria-controls="offerta" role="tab" data-toggle="tab">Bacheca</a></li>
                                    <li role="presentation"><a href="#richiesta" aria-controls="richiesta" role="tab" data-toggle="tab">Famiglia</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="offerta">
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-body">
                                                <div class="body">
												
                            
							
							
							
							
							
							
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="../../images/image-gallery/11.jpg" />
                                    </div>
                                    <div class="item">
                                        <img src="../../images/image-gallery/12.jpg" />
                                    </div>
                                    <div class="item">
                                        <img src="../../images/image-gallery/19.jpg" />
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
							
							
							
							
							
							
							
                        </div>
						
                                            </div>
                                        </div>

                                        
                                    </div>
									
									
									
									
									
									<!-- FAMIGLIA -->
									
                                    <div role="tabpanel" class="tab-pane fade in" id="richiesta">

                                        <div class="panel panel-default panel-post">
                                            
                                            <div class="panel-body">
											
											
											
                                                
												
												<div class="body table-responsive">
												
												
												<script>
			function ciao() {
			swal({
        title: "Aggiungi un membro",
        text: '<input type="text" class="form-control" placeholder="Nome" style="display: inline">		<input type="text" class="form-control" placeholder="Cognome" style="display: inline">		<input type="text" class="form-control" placeholder="Età" style="display: inline"> <input type="email" class="form-control" placeholder="Email" style="display: inline"> <input type="password" class="form-control" placeholder="Password" style="display: inline"> <input name="group4" type="radio" id="radio_7" class="radio-col-red" checked />  <label for="radio_7">BAMBINO</label> <input name="group4" type="radio" id="radio_8" class="radio-col-red" />  <label for="radio_8">ANZIANO</label>',
        html: true
    });
	}
	</script>
			
			<button class="btn bg-green waves-effect" onclick="ciao();">
                                    <i class="material-icons">add</i>
                                    <span>AGGIUNGI UN MEMBRO</span>
                                </button><br><br>
												
												<h3>Nucleo Familiare</h3>
                            <table class="table">
                                <thead>
                                    <tr>
										<th>FOTO</th>
                                        <th>NOME</th>
                                        <th>ET&Agrave;</th>
                                        <th>TIPOLOGIA</th>
										<th>REIMPOSTA PW</th>
										<th>CONNESSIONI</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
									<td><img src="images/profpics/girl.jpg" width="48" height="48" alt="User" style="border-radius: 50%;"/></td>
                                        <td>Rossana Iftimie</td>
                                        <td>13</td>
                                        <td>Figlia</td>
								<td><button type="button" class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">settings</i>
                                </button></td>
								<td><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">forum</i>
                                </button></td>
                                    </tr>
									
									
									<tr>
									<td><img src="images/profpics/old.jpg" width="48" height="48" alt="User" style="border-radius: 50%;"/></td>
                                        <td>Piergiorgio Iftimie</td>
                                        <td>67</td>
                                        <td>Padre</td>
								<td><button type="button" class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">settings</i>
                                </button></td>
								<td><button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">forum</i>
                                </button></td>
                                    </tr>
                                </tbody>
                            </table>
							
							
							
							
							
                        </div>
												
												
												
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
									
									
									
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	
	
	

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
	
	    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
	
	<script src="js/pages/ui/dialogs.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
	
    <script src="js/demo.js"></script>
</body>

</html>
