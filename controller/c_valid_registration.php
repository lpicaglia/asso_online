<?php
	require_once("model/m_valid_registration.php");

	$form 		= array();
	$views		= array();

	if(isset($_POST)){
		if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['pwd']) && !empty($_POST['pwd2']) && !empty($_POST['domaine']) && !empty($_POST['theme'])){
			
			$form[] = $_POST['name'];
			$form[] = $_POST['mail'];
			$form[] = $_POST['pwd'];
			$form[] = $_POST['adresse'];
			$form[] = $_POST['cplt_adresse'];
			$form[] = $_POST['cp'];
			$form[] = $_POST['ville'];
			$form[] = $_POST['tel'];
			$form[] = $_POST['desc'];
			$form[] = $_POST['facebook'];
			$form[] = $_POST['twitter'];
			$form[] = $_POST['link'];
			$form[] = $_POST['theme'];

			createAccount($form);
			$views[] = "valid_registration";

		}
		else{
			$views[] = "error_registration";
		}
	}

	$views[] = "speedSearch";

	require_once("view/v_mainpage.php");
?>