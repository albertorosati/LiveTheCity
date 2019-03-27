<?php require 'include/init.php';?>
<?php include 'include/head.php';?>
<?php include 'include/topbar.php';?>
<?php include 'include/sidebar.php';?>
	<section class="content">
        <div class="block-header">
                <h2>CAR SHARING</h2>
            </div>
			<?php if (isset($_GET['success'])) {
				echo '
			<div class="alert alert-success">
                                <strong>Ottimo!</strong> Hai inserito con successo il tuo annuncio. Potrai vedere di seguito le compatibilità.
                            </div>';
			}
			?>


			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                COMPATIBILIT&Agrave;
                                <small>Le persone che condividono il tuo stesso percorso o uno simile</small>

                            </h2><br>
							<p>L'itinerario da te inserito è il seguente:
								<li>Via Felice Cavallotti, 26 <small>(Casa)</small> -> Via Lodovico Ariosto <small>(Lavoro)</small></li></p>



								<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d22685.56708981419!2d10.624494364920368!3d44.705407462338805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47801dd34b84b791%3A0xbd53a378636a9e0c!2sVia+Felice+Cavallotti%2C+26%2C+42122+Reggio+Emilia+RE!3m2!1d44.720410699999995!2d10.6541471!4m5!1s0x47801c59a27619d3%3A0xca5eedc30a8b70b2!2sVia+Lodovico+Ariosto%2C+42121+Reggio+Emilia+RE!3m2!1d44.69444!2d10.630022!5e0!3m2!1sit!2sit!4v1553421765297" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>


                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>FOTO</th>
                                        <th>NOME</th>
										<th>COMPATIBILIT&Agrave;*</th>
                                        <th>CONTATTA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="user-info image"><img src="images/14.jpg" width="48" height="48" alt="User" style="border-radius: 50%;"/></div></td>
                                        <td>Savino Costa</td>
										<td class="font-bold col-green">87%</td>
                                        <td><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">forum</i>
                                </button></td>
                                    </tr>
                                    <tr>
                                        <td><div class="user-info image"><img src="images/61.jpg" width="48" height="48" alt="User" style="border-radius: 50%;"/></div></td>
                                        <td>Stefania Genovesi</td>
										<td class="font-bold col-green">62%</td>
                                        <td><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">forum</i>
                                </button></td>
                                    </tr>
                                    <tr>
                                        <td><div class="user-info image"><img src="images/44.jpg" width="48" height="48" alt="User" style="border-radius: 50%;"/></div></td>
                                        <td>Lillo Rossi</td>
										<td class="font-bold col-orange">48%</td>
                                        <td><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">forum</i>
                                </button></td>
                                    </tr>
                                    <tr>
                                        <td><div class="user-info image"><img src="images/77.jpg" width="48" height="48" alt="User" style="border-radius: 50%;"/></div></td>
                                        <td>Angelino Dellucci</td>
										<td class="font-bold col-red">21%</td>
                                        <td><button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">forum</i>
                                </button></td>
                                    </tr>
                                </tbody>
                            </table>

							<small>*La compatibilità è calcolata in base alla somiglianza tra il percorso da te inserito e da quello del guidatore</small>
                        </div>
                    </div>
                </div>
            </div>


			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                AGGIUNGI NUOVO ITINERARIO
                                <small>Inserisci il percorso che compi abitualmente per condividere le spese e fare quattro chiacchiere</small>
                            </h2>
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
                            <form id="form_validation" method="POST">
							<div class="form-group">
                                    <input type="radio" name="gender" id="male" class="with-gap">
                                    <label for="male">Sono l'autista</label>

                                    <input type="radio" name="gender" id="female" class="with-gap">
                                    <label for="female" class="m-l-20">Cerco un passaggio</label>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="partenza" required>
                                        <label class="form-label">Indirizzo Partenza</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="arrivo" required>
                                        <label class="form-label">Indirizzo Arrivo</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="datetimepicker form-control" placeholder="Data e ora di partenza">
                                        </div>
                                </div>


                                <a href="?success" class="btn btn-primary waves-effect" type="submit">INVIA</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </section>
<?php include 'include/bottom.php';?>
