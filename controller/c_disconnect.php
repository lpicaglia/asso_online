<?php
	session_start();
	unset($_SESSION['id_asso']);
	session_destroy();

	$views = array();
	$views[] = "topbar";
	$views[] = "welcome";
	$views[] = "speedSearch";
	$views[] = "registration";

	require_once("view/v_mainpage.php");
?>