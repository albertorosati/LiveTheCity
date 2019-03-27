<?php require 'include/init.php';?>
<?php include 'include/head.php';?>
<?php include 'include/topbar.php';?>
<?php include 'include/sidebar.php';?>
	<section class="content">




	<div class="container-fluid">

			<div class="block-header">
                <h2>RICHIESTE</h2>
            </div>

			<a href="new.php" class="btn bg-green waves-effect">
                                    <i class="material-icons">add</i>
                                    <span>AGGIUNGI UNA RICHIESTA</span>
                                </a><br><br>


			<div>
                    <div class="card">
                        <div class="body">
                            <div>


								<?php

					$nome = array("Simone Badiali", "Mario Rossi");
					$data = array( "20/02/2019", "20/02/2019");
					$text = array( "Buongiorno,  cerco insegnante privato che mi possa aiutare nel prepararmi alle gare internazionali di karate.
P.S. sono cintura nera.", "Buongiorno, purtroppo stamane mi si è rotta la lavatrice, e avrei una certa urgenza nell usarla.
Per caso qualcuno in quartiere, ne capisce qualcosa?");
					$profile_pic = array( "images/0.jpg", "images/76.jpg", );
					$news_pic = array( "images/karate.jpg", "images/idraulico_affascinante.jpg",);


					for ($i = 0; $i < 2; $i++) {

						echo '<div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="offerta">
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img src="'.$profile_pic[$i].'" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#">'.$nome[$i].'</a>
                                                        </h4>
                                                        Condiviso pubblicamente - '.$data[$i].'
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="post">
                                                    <div class="post-heading">
                                                        <p>'.$text[$i].'</p>
                                                    </div>
                                                    <div class="post-content">
                                                        <img style="object-fit: cover;
width: 100%; max-height: 500px; object-position: top;" src="'.$news_pic[$i].'" class="img-responsive" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <a class="btn bg-green waves-effect" style="margin-bottom: 10px">
																<i class="material-icons">message</i>
																<span>CONTATTA PRIVATAMENTE</span>
															</a>
                                                        </a>
                                                    </li>
                                                    <li>

                                                    </li>
                                                </ul>


                                            </div>
                                        </div>


                                    </div>






                                </div>';


					}

					?>




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

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

		    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>



    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	<script src="js/pages/ui/dialogs.js"></script>
</body>

</html>
