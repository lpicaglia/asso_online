<?php
	session_start();
	
	require_once('model/m_association.php');
	require_once("model/m_news.php");

	if(isset($_POST['contentNews']) && !empty($_POST['contentNews'])){

		$valuesNews		= array();

		$valuesNews[] = '';
		$valuesNews[] = $_POST['contentNews'];
		$valuesNews[] = $_SESSION['id_asso'];
		$valuesNews[] = '';
		$valuesNews[] = date("Y-m-d H:i:s");

		if(setNews($valuesNews) != 0){
			echo 'News ajouter avec succes ';
		}
		else{
			echo '/!\ News non ajouter /!\\';
		}
	}

	$asso = getIdCardInfo($_SESSION['id_asso']);

	$views = array();
	$views[] = "topbar";
	$views[] = "id_card";
	$views[] = "userpage";
	$views[] = "speedSearch";
	
	echo 'controller = addnews / ';
	var_dump($_SESSION['id_asso']);

	require_once("view/v_mainpage.php");

?>