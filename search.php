<?php
	session_start();
	$fn = $_POST['firstName'];
	$ln = $_POST['lastName'];
	$_SESSION['server'] = $_POST['server'];


	$_SESSION['userName'] = ucwords($fn)." ".ucwords($ln);
	$_SESSION['server'] = ucwords($_SESSION['server']);
	
	header('Location: stats.php') ;
?>