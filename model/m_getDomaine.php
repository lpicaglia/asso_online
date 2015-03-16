<?php
	function getDomaine(){
		$pdo = PdoSio::getPdoSio();
		$request = "SELECT id_domaine, lib_domaine FROM domaine;";
		$res = $pdo->selectRequest($request);
		return $res;
	}
?>