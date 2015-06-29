<?php
	session_start();

	$views = array();
	$views[] = "topbar";
	
	if(!isset($_SESSION['id_asso'])){
		$views[] = "welcome";
		$views[] = "speedSearch";
		$views[] = "registration";
	}
	else{
		require_once('model/PDO.php');
		require_once('model/m_association.php');
		
		$asso = array();
		
		$asso = getIdCardInfo($_SESSION['id_asso']);
		$views[] = "id_card";
		$views[] = "userpage";
		$views[] = "speedSearch";	
	}

	echo 'controller = welcome / ';
	var_dump($_SESSION['id_asso']);

	require_once("view/v_mainpage.php");
?>