<?php
	require_once("model/PDO.php");

	function getDomaine(){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_domaine, lib_domaine FROM domaine;";
		$res = $pdo->selectRequest($request);
		return $res;
	}

	function getTheme($id_domaine){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_theme, lib_theme FROM theme WHERE id_domaine = ".$id_domaine.";";
		$res = $pdo->selectRequest($request);
		return $res;
	}
?>