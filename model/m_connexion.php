<?php
	require_once('model/PDO.php');

	function connexion($username, $password){
		$val = array();

		$pdo = PdoSio::getPdoSio();
		$request = "SELECT *
					FROM association 
					WHERE mail_asso ='".$username."' AND mdp_asso = '".md5($password)."';";
		$resultats = $pdo->selectRequest($request);
		
		if(!empty($resultats)){
		    $val = $resultats[0];
			return $val;
		}
		else{
			return false;
		}
	}

?>