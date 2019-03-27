<?php require 'include/init.php';?>
<?php include 'include/head.php';?>
<?php include 'include/topbar.php';?>
<?php include 'include/sidebar.php';?>
	<section class="content">
        <div class="block-header">
                <h2>IL MIO QUARTIERE</h2>
            </div>



                    <div class="card">
                        <img style="object-fit: cover;
width: 100%;
height: 250px;" src="https://www.emisfera.com/wp-content/uploads/2018/06/mancasale-case-history.png">

                    </div>

					<div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-red">
                        <div class="icon">
                            <i class="material-icons">accessibility</i>
                        </div>
                        <div class="content">
                            <div class="text">RESIDENTI</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-indigo">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">MEMBRI</div>
                            <div class="number count-to" data-from="0" data-to="24" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-purple">
                        <div class="icon">
                            <i class="material-icons">event</i>
                        </div>
                        <div class="content">
                            <div class="text">EVENTI</div>
                            <div class="number count-to" data-from="0" data-to="14" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-deep-purple">
                        <div class="icon">
                            <i class="material-icons">feedback</i>
                        </div>
                        <div class="content">
                            <div class="text">ANNUNCI</div>
                            <div class="number count-to" data-from="0" data-to="21" data-speed="1500" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

					<div class="card">

					<div class="header">
                            <h2>
                                LISTA UTENTI DEL QUARTIERE
                            </h2>

                        </div>
					<div class="body">
					<div class="table-responsive"  style="overflow: hidden;">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nome</th>
                                            <th>Contatta</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nome</th>
                                            <th>Contatta</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									<?php

									include 'include/randomNameGenerator.php';
$r = new randomNameGenerator('array');

									$names = $r->generateNames(30);

									$strings = array(
										'men',
										'women',
									);

									for ($i = 0; $i < 30; $i++) {
										$key = array_rand($strings);
										echo '<tr>
                                            <td><img src="https://randomuser.me/api/portraits/'.$strings[$key].'/'.$i.'.jpg" width="48" height="48" alt="User" style="border-radius: 50%;"></td>
                                            <td>'.$names[$i].'</td>
                                            <td><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">forum</i>
                                </button></td>
                                        </tr>';
									}
									?>
                                    </tbody>
                                </table>
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



	     <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>

	 <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

	    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>


    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Custom Js -->
    <script src="js/pages/forms/basic-form-elements.js"></script>

	<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script src="js/pages/widgets/infobox/infobox-4.js"></script>
</body>

</html>
