<?php
	require_once("model/m_association.php");
	require_once("model/m_domaine.php");
	require_once("model/m_theme.php");
	
	$name		= '';
	$mail 		= '';

	$domaines 	= array();
	$domaines 	= getDomaines();
	
	$themes 	= array();
	$themes		= getThemes();

	$views 		= array();
	$views[] = "topbar";
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