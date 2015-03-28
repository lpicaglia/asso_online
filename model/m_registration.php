<?php
	require_once("model/PDO.php");

	function getDomaines(){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_domaine, lib_domaine FROM domaine ORDER BY lib_domaine;";
		$res = $pdo->selectRequest($request);
		return $res;
	}

	function getThemes(){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_theme, lib_theme, id_domaine FROM theme ORDER BY lib_theme;";
		$res = $pdo->selectRequest($request);
		return $res;
	}
?>