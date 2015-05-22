<?php
	session_start();
	
	require_once("model/m_news.php");

	$views = array();
	$views[] = "topbar";
	$views[] = "id_card";
	$views[] = "userpage";
	$views[] = "speedSearch";
	require_once("view/v_mainpage.php");

?>