<?php
	require_once("model/m_registration.php");
	
	$domaines 	= array();
	$themes 	= array();
	$views 		= array();

	$domaines 	= getDomaine();

	$views[] = "form_registration";
	$views[] = "speedSearch";

	require_once("view/v_mainpage.php");
?>