<?php
	session_start();

	require_once("model/m_domaine.php");
	require_once("model/m_theme.php");
	require_once("model/m_association.php");
	
	$domaines 	= array();
	$domaines 	= getDomaines();

	$themes 	= array();
	$themes		= getThemes();
	
	$asso 		= array();
	$asso 		= getAssoInfo($_SESSION['id_asso']);

	$views 		= array();
	$views[] = "topbar";
	$views[] = "profil";
	$views[] = "speedSearch";

	require_once("view/v_mainpage.php");
?>