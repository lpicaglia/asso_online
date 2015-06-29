<?php
	session_start();
	
	require_once('model/m_association.php');
	require_once("model/m_news.php");

	if(isset($_POST['contentNews']) && !empty($_POST['contentNews'])){
		$news = array();
		$news[] = '';
		$news[] = $_POST['contentNews'];
		$news[] = $_SESSION['id_asso'];
		$news[] = date("Y-m-d H:i:s");
		$news[] = date("Y-m-d H:i:s");

		if(ajouterNews('news', $news) != 0){
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