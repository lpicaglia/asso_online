<?php
	session_start();

	require_once('model/m_association.php');
	require_once("model/m_news.php");

	$asso = array();
	$views = array();
	$views[] = "topbar";
	
	if(isset($_SESSION['id_asso'])){
		$asso = getIdCardInfo($_SESSION['id_asso']);
		$views[] = "id_card";
		$views[] = "userpage";
		$views[] = "speedSearch";
	}
	else{
		if(isset($_POST['page'])){
			if($_POST['page'] == 'main'){

				$_SESSION['id_asso'] = connexion($_POST['mail'], $_POST['pwd']);

				if(!empty($_SESSION['id_asso'])){
					$asso = getIdCardInfo($_SESSION['id_asso']);
					$views[] = "id_card";
					$views[] = "userpage";
					$views[] = "speedSearch";
				}
				else{
					$views[] = "error_connexion";	
				}

			}
			elseif($_POST['page'] == 'allNews'){
				$views[] = "userpage";
				$views[] = "speedSearch";
				$views[] = "registration";
			}
			else{
				$views[] = "error_connexion";
				$views[] = "speedSearch";
				$views[] = "registration";
			}
		}
	}

	require_once("view/v_mainpage.php");
?>