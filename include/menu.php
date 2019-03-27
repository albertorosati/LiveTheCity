<?php
$fileName = basename($_SERVER["SCRIPT_FILENAME"], '.php');
function printActive($menu_name) {
	global $fileName;
	if ($menu_name == $fileName) {
		echo 'class="active"';
	}
}
?>
<!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGAZIONE</li>
                    <li <?php printActive("home");?>>
                        <a href="home.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
					<li <?php printActive("new");?>>
                        <a href="new.php">
                            <i class="material-icons">add</i>
                            <span>Pubblica Annuncio</span>
                        </a>
                    </li>
					<li <?php printActive("offerte"); printActive("richieste");?>>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">near_me</i>
                            <span>Annunci</span>
                        </a>
                        <ul class="ml-menu">
                            <li <?php printActive("offerte");?>>
                                <a href="offerte.php">Offerte</a>
                            </li>
                            <li <?php printActive("richieste");?>>
                                <a href="richieste.php">Richieste</a>
                            </li>
                        </ul>
                    </li>
					<li <?php printActive("events");?>>
                        <a href="events.php">
                            <i class="material-icons">event</i>
                            <span>Eventi</span>
                        </a>
                    </li>
					<li <?php printActive("tourism");?>>
                        <a href="tourism.php">
                            <i class="material-icons">flight_takeoff</i>
                            <span>Turismo Esperienziale</span>
                        </a>
                    </li>
					<li <?php printActive("car_sharing");?>>
                        <a href="car_sharing.php">
                            <i class="material-icons">directions_car</i>
                            <span>Car Sharing</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->