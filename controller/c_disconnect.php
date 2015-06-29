<?php
	session_start();
	unset($_SESSION['id_asso']);
	session_destroy();

	$views = array();
	$views[] = "topbar";
	$views[] = "welcome";
	$views[] = "speedSearch";
	$views[] = "registration";

	echo 'controller = disconnect / ';
	var_dump($_SESSION['id_asso']);

	require_once("view/v_mainpage.php");
?>