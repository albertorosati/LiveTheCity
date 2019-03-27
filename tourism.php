<?php require 'include/init.php';?>
<?php include 'include/head.php';?>
<?php include 'include/topbar.php';?>
<?php include 'include/sidebar.php';?>
	<section class="content">

		<div class="block-header">
                <h2>TURISMO ESPERIENZIALE</h2>
            </div>

			<script>
			function ciao() {
			swal({
        title: "Proponiti come Guida",
        text: "Facci sapere le tue idee e le disponibilità in orario:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Inserisci del testo"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("Devi scrivere qualcosa per proseguire!"); return false
        }
        swal("La tua proposta è stata inviata!", "Avremo cura di valutare la tua richiesta. Grazie per il contributo.", "success");
    });
	}
	</script>

			<button class="btn bg-green waves-effect" onclick="ciao();">
                                    <i class="material-icons">add</i>
                                    <span>PROPONITI</span>
                                </button><br><br>


			<!-- Default Media -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="javascript:void(0);">
                                        <img class="media-object" src="https://i.gyazo.com/beb3d094577631bf566437eea599c58d.png" width="128" height="128">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mancasale</h4> Mancasale o Villa Mancasale (Mancaṣēl in dialetto reggiano, Magni Casalis in latino) è un frazione (o villa) del comune di Reggio Emilia, situata nella zona nord del capoluogo. La frazione, anche se è stata quasi completamente inglobata nel tessuto urbano cittadino, sorge sulla strada per Novellara, che nell'antichità era il cardo che attraversava il territorio reggiano. Nel 989 è citata in un documento come Magnum Casale. Dal secondo dopoguerra è diventata la principale area industriale e artigianale del comune, grazie anche alla costruzione del casello dell'autostrada del Sole, perdendo gran parte della sua connotazione agricola.
									<br><small>a 3,2 km da te</small>
									 <div class="media-body">
                                            <h4 class="media-heading">Eventi disponibili in zona</h4>


											<table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <td><p><img src="images/caterina.jpg" width="48" height="48" alt="User" style="border-radius: 50%; margin-right: 10px;"/>
                                        Caterina offre l'esperienza <a href="show_event.php" class="font-bold col-red">Tortellini con una "Sfoglina" DOC</a></p></td></tr>
									<tr><td><p><img src="https://randomuser.me/api/portraits/men/20.jpg" width="48" height="48" alt="User" style="border-radius: 50%; margin-right: 10px;"/>
                                        Michele offre l'esperienza <a href="show_event.php" class="font-bold col-red">Tour fotografico nella natura</a></p></td>
                                    </tr>
                                </tbody>
                            </table>
                                        </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://i.gyazo.com/75175168fb5167deba103a82e99a3a5e.png" width="128" height="128">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Rosta Nuova</h4> Rosta Nuova (“La Rosta” in dialetto reggiano) è un quartiere della periferia sud est di Reggio e nasce qualche anno prima della fondazione della locale parrocchia, dedicata a S.Antonio da Padova (1960).
Sino al dopoguerra il territorio di Rosta era parte integrante della villa di San Pellegrino e in misura minore era sotto la giurisdizione della parrocchia di Ospizio. Il nome della località deriva probabilmente dal significato di rosta, ossia un'inferriata semicircolare a raggiera posta sopra porte e portoni, ma anche manufatti idraulici e mulini. Soltanto nel 1326 si ha notizia di una chiesa di S.Maria della Rosta cui era annesso un piccolo ospedale, ancora menzionata nel 1500. Tuttavia, il mulino della Rosta è citato nel 1598 e riportato sulla cartografia storica del XVI-XVIII secolo, che raffigura l'edificio affiancato da due ruote esterne verticali. Il mulino prendeva l'acqua dal Canale di Secchia, ora tombato, che scorreva parallelo alla strada per Scandiano.

									<br><small>a 4,5 km da te</small>


									<div class="media-body">
                                            <h4 class="media-heading">Eventi disponibili in zona</h4>


											<table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <td><p><img src="https://randomuser.me/api/portraits/men/22.jpg" width="48" height="48" alt="User" style="border-radius: 50%; margin-right: 10px;"/>
                                        Filippo offre l'esperienza <a href="show_event.php" class="font-bold col-red">Sagra della salsiccia</a></p></td></tr>
									<tr><td><p><img src="https://randomuser.me/api/portraits/women/32.jpg" width="48" height="48" alt="User" style="border-radius: 50%; margin-right: 10px;"/>
                                        Nina offre l'esperienza <a href="show_event.php" class="font-bold col-red">I segreti del Parmigiano Reggiano</a></p></td>
                                    </tr>
                                </tbody>
                            </table>
                                        </div>


                                </div>
                            </div>
							<div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="https://i.gyazo.com/01bb60f0c307859dca47f17c2211d934.png" width="128" height="128">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Pieve Modolena</h4> Pieve Modolena o Villa Pieve Modolena (La Pēv in dialetto reggiano) è una grossa frazione del comune di Reggio nell'Emilia. Pieve Modolena sorge a 3,7 km ad ovest di Reggio Emilia, lungo la via Emilia in direzione Parma. Il suffisso Modolena deriva dal torrente che scorre a ponente dell'abitato; sempre ad ovest, il confine con la frazione di Cella è delineato da un altro torrente: il Quaresimo. In passato centro agricolo, negli ultimi anni ha conosciuto un intenso sviluppo residenziale e demografico. La parte a nord della via Emilia è stata destinata ad ospitare una vasta area industriale, mentre l'area sud è zona prettamente residenziale.
									<br><small>a 5,1 km da te</small>


									<div class="media-body">
                                            <h4 class="media-heading">Eventi disponibili in zona</h4>


											<table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <td><p><img src="https://randomuser.me/api/portraits/men/35.jpg" width="48" height="48" alt="User" style="border-radius: 50%; margin-right: 10px;"/>
                                        Roberto offre l'esperienza <a href="show_event.php" class="font-bold col-red">Una giornata all'italiana</a></p></td></tr>
									<tr><td><p><img src="https://randomuser.me/api/portraits/women/68.jpg" width="48" height="48" alt="User" style="border-radius: 50%; margin-right: 10px;"/>
                                        Matilde offre l'esperienza <a href="show_event.php" class="font-bold col-red">PASQUETTA vegetariana da Matilde</a></p></td>
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
