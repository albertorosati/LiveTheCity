﻿<?php
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
	
	 <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

	    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
	    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
	
	    <!-- Dropzone Css -->
    <link href="plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
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
					<li class="active">
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
        
		<?php if (isset($_GET['success'])) {
				echo '
			<div class="alert alert-success">
                                <strong>Ottimo!</strong> Hai inserito con successo il tuo annuncio. Potrai vedere di seguito le compatibilità.
                            </div>';
			}
			?>
		
		<!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PUBBLICA UN ANNUNCIO</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Informazioni Basilari</h3>
                                <fieldset>
								<div class="form-group form-float">
                                            <input name="type" value='0' type="radio" id="radio_1" class="radio-col-red" checked />
											<label for="radio_1">Mi offro</label>
											<input name="type" value='1' type="radio" id="radio_2" class="radio-col-red" />
											<label for="radio_2">Mi servirebbe</label>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title" required>
                                            <label class="form-label">Titolo annuncio*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
										
                                           <input type="text" class="form-control" name="descrizione" required>
											                                            <label class="form-label">Descrizione annuncio*</label>

                                        </div>
                                    </div>
									
									<div class="form-group form-float">
											<b>Fascia oraria di disponibilità</b>
                                            <input name="fascia" value='0' type="radio" id="radio_3" class="radio-col-red" checked />
											<label for="radio_3">Mattino</label>
											<input name="fascia" value='1' type="radio" id="radio_4" class="radio-col-red" />
											<label for="radio_4">Pomeriggio</label>
											<input name="fascia" value='2'type="radio" id="radio_5" class="radio-col-red" />
											<label for="radio_5">Sera</label>
                                    </div>
									

									
									<div class="form-group form-float">
																				<b>Status annuncio</b>
                                            <input name="status" value='0' type="radio" id="radio_6" class="radio-col-red" checked />
											<label for="radio_6">Annuncio pubblico</label>
											<input name="status" value='1' type="radio" id="radio_7" class="radio-col-red" />
											<label for="radio_7">Annuncio privato</label>
                                    </div>

                                </fieldset>

                                <h3>Carica un'immagine</h3>
                                <fieldset>
									<p>Anche l'occhio vuole la sua parte! Stupisci le persone con una bella foto che descriva al meglio la tua inserzione.</p>
									
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                                    
                                </fieldset>

                              
                            </form>
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
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
	
	
    <!-- Jquery Validation Plugin Css -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	 <script src="js/pages/forms/form-wizard.js"></script>
	 
	 	    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
	
	 
	     <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>
	 
	 <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/pages/forms/basic-form-elements.js"></script>
	
		<script>
$('a[href="#finish"]').click(function() {
	alert("ciao");
});

</body>

</html>
