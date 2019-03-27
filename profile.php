<?php require 'include/init.php';?>
<?php include 'include/head.php';?>
<?php include 'include/topbar.php';?>
<?php include 'include/sidebar.php';?>
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
