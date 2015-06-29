<?php
	require_once("model/PDO.php");

	function getThemes(){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_theme, lib_theme, id_domaine FROM theme ORDER BY lib_theme;";
		$res = $pdo->selectRequest($request);
		return $res;
	}

	function getDomaineTheme($idTheme){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_domaine FROM theme WHERE id_theme = ".$idTheme.";";
		$res = $pdo->selectRequest($request);
		return $res;	
	}
?>
