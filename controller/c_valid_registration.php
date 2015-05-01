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

			$table  = 'association(';	        

			$table .= 'nom_asso';
			$form[] = $_POST['name'];

			$table .= ',mail_asso';
			$form[] = $_POST['mail'];
					
			$table .= ',mdp_asso';
			$form[] = md5($_POST['pwd']);
					
			$table .= ',adr_asso';
			$form[] = $_POST['adr'];

			$table .= ',cplt_adr_asso';
			$form[] = $_POST['adr2'];

			$table .= ',cp_asso';
			$form[] = $_POST['cp'];

			$table .= ',ville_asso';
			$form[] = $_POST['ville'];

			$table .= ',tel_asso';
			$form[] = $_POST['tel'];

			$table .= ',descr_asso';
			$form[] = $_POST['desc'];

			$table .= ',logo_asso';
			$form[] = $uploadfile;

			$table .= ',fb_asso';
			$form[] = $_POST['facebook'];

			$table .= ',twt_asso';
			$form[] = $_POST['twitter'];

			$table .= ',link_asso';
			$form[] = $_POST['link'];

			$table .= ',id_theme';
			$form[] = $_POST['theme'];

	        $table.=')';

			if(createAsso($table,$form) != 0){
				session_start();
				$_SESSION['id_asso'] = connexion($_POST['mail'], $_POST['pwd']);

				if(!empty($_SESSION['id_asso'])){
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