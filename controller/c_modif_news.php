<?php
	session_start();

	require_once('model/m_association.php');
	require_once("model/m_news.php");

	$asso 		= array();
	$views 		= array();
	$views[] 	= "topbar";
	
	if(!empty($_POST['modifNews'])){
		modifyNews($_POST['idNews'], $_POST['modifNews']);
	}

	$asso 		= getIdCardInfo($_SESSION['id_asso']);
	$views[]	= "id_card";
	$views[] 	= "userpage";
	$views[] 	= "speedSearch";
	
	echo 'controller = modif_news / ';
	echo $_SESSION['id_asso'];
	
	require_once("view/v_mainpage.php");
?>