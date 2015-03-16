<?php
	function getTheme(){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_theme, lib_theme FROM theme;";
		$res = $pdo->selectRequest($request);
		return $res;
	}
?>