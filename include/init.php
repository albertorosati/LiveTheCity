<?php
session_start();
if(!isset($_SESSION['email'])) {
	header('Location: index.php');
	exit();
}

if($_SESSION['tipo'] == "1") {
	header('Location: kid.php');
}