<?php require 'include/init.php';?>
<?php include 'include/head.php';?>
<?php include 'include/topbar.php';?>
<?php include 'include/sidebar.php';?>
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
