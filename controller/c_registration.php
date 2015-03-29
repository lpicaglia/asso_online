<?php
	require_once("model/m_registration.php");
	
	$domaines 	= array();
	$themes 	= array();
	$views 		= array();
	$name		= '';
	$mail 		= '';

	$domaines 	= getDomaines();
	$themes		= getThemes();

	$views[] = "form_registration";
	$views[] = "speedSearch";

	if(isset($_POST)){
		if(!empty($_POST['name'])){
			$name = $_POST['name'];
		}

		if(!empty($_POST['mail'])){
			$mail = $_POST['mail'];
		}
	}

	require_once("view/v_mainpage.php");
?>