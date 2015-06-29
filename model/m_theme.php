<?php
	require_once("model/PDO.php");

	function getThemes(){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_theme, lib_theme, id_domaine FROM theme ORDER BY lib_theme;";
		$res = $pdo->selectRequest($request);
		return $res;
	}
?>
