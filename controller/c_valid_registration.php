<?php
	require_once('model/PDO.php');
	require_once('model/m_association.php');

	$form 		= array();
	$views		= array();
	$views[] 	= 'topbar';
	
	if(isset($_POST)){
		if(		!empty($_POST['name']) 
			&& 	!empty($_POST['mail']) 
			&& 	!empty($_POST['pwd']) 
			&& 	!empty($_POST['confirmPwd']) 
			&& 	!empty($_POST['domaine']) 
			&& 	!empty($_POST['theme'])){

			if(is_uploaded_file($_FILES['logo']['tmp_name'])){
				$uploaddir = 'img/uploads/';
	           	$extension = '.'.substr($_FILES['logo']['type'], 6);
	            $uploadfile = $uploaddir.'profilPic-'.date('Ymd-His').$extension;
	            move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile);
	        }
	        else{
	        	$uploadfile = 'img/uploads/unknown.png';
	        }	

	        $form[] = '';
			$form[] = $_POST['name'];
			$form[] = $_POST['mail'];
			$form[] = md5($_POST['pwd']);
			$form[] = date("Y-m-d H:i:s"); 
			$form[] = null;
			$form[] = $_POST['adr'];
			$form[] = $_POST['adr2'];
			$form[] = $_POST['cp'];
			$form[] = $_POST['ville'];
			$form[] = $_POST['tel'];
			$form[] = $_POST['desc'];
			$form[] = $uploadfile;
			$form[] = $_POST['facebook'];
			$form[] = $_POST['twitter'];
			$form[] = $_POST['link'];
			$form[] = $_POST['theme'];

			if(createAsso('association',$form) != 0){
				session_start();
				$_SESSION['id_asso'] = connexion($_POST['mail'], $_POST['pwd']);

				if(!empty($_SESSION['id_asso'])){
					$asso = getIdCardInfo($_SESSION['id_asso']);
					$views[] = 'id_card';
					$views[] = 'valid_registration';
				}
				else{
					$views[] = 'error_connexion';	
				}
			}
			else{
				$views[] = 'error_registration';
			}
		}
		else{
			$views[] = 'error_registration';
		}
	}
	else{
		$views[] = 'welcome';
		$views[] = 'registration';
	}

	$views[] = 'speedSearch';

	require_once('view/v_mainpage.php');
?>