<?php
	require_once('model/PDO.php');

	function connexion($username, $password){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_asso
					FROM association 
					WHERE mail_asso ='".$username."' AND mdp_asso = '".md5($password)."';";
		$id = $pdo->selectRequest($request);
		return $id[0]['id_asso'];
	}

	function createAsso($table,$values){
    	$pdo = PdoSio::getPdoSio();
    	return $pdo->insertRequest($table, $values);
	}

	function getIdCardInfo($id){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT nom_asso, logo_asso, adr_asso, cplt_adr_asso, 
						   cp_asso, ville_asso, tel_asso, mail_asso, 
						   descr_asso, fb_asso, twt_asso, link_asso
					FROM association 
					WHERE id_asso =".$id.";";
		$res = $pdo->selectRequest($request);

		if(!empty($res)){
			foreach($res[0] as $key => $val){
				$info[$key] = $val;
			}	
			return $info;
		}
		else{
			return false;
		}
	}

	function getAssoInfo($id){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT nom_asso , mail_asso, mdp_asso, logo_asso, adr_asso,  
						   cplt_adr_asso, cp_asso, ville_asso, tel_asso, 
						   descr_asso, fb_asso, twt_asso, link_asso, id_theme
					FROM association 
					WHERE id_asso =".$id.";";
		$res = $pdo->selectRequest($request);

		if(!empty($res)){
			foreach($res[0] as $key => $val){
				$info[$key] = $val;
			}	
			return $info;
		}
		else{
			return false;
		}
	}

	/*
	function modifAsso($table,$values){
    	$pdo = PdoSio::getPdoSio();
    	return $pdo->insertRequest($table, $values);
	}*/
?>