<?php
	require_once('model/PDO.php');

	function connexion($username, $password){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT COUNT(*) FROM association WHERE mail_asso ='".$username."' AND pwd_asso = '".md5($password)."';";
		$res = $pdo->selectRequest($request);
		return intval($res[0]['COUNT(*)'])>0 ? true : false;
	}
?>
