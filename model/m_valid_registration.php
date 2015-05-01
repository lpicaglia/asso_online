<?php
	require_once("model/m_connexion.php");

	function createAccount($table,$values){
    	$pdo = PdoSio::getPdoSio();
    	return $pdo->insertRequest($table, $values);
	}
?>