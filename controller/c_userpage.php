<?php
	session_start();

	require_once('model/m_association.php');
	require_once("model/m_news.php");

	$asso = array();
	$views = array();
	$views[] = "topbar";
	
	if(!isset($_SESSION['id_asso'])){
		if(isset($_POST) && !empty($_POST)){
			$_SESSION['id_asso'] = connexion($_POST['mail'], $_POST['pwd']);

			if(!empty($_SESSION['id_asso'])){
				$asso = getIdCardInfo($_SESSION['id_asso']);
				$views[] = "id_card";
				$views[] = "userpage";
			}
			else{
				$views[] = "error_connexion";	
			}
		}
		else{
			$views[] = "error_connexion";
		}
	}
	else{
		$asso = getIdCardInfo($_SESSION['id_asso']);
		$views[] = "id_card";
		$views[] = "userpage";
	}

	$views[] = "speedSearch";
	
	require_once("view/v_mainpage.php");
?>