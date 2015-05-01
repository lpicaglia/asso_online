<?php
	require_once('model/PDO.php');

	function getNbNews($id){
		$pdo = PdoSio::getPdoSio();
		$nb_news = $pdo->selectRequest("SELECT COUNT(*) 
										FROM news 
										WHERE id_asso = ".$id.";");
	    $nb = $pdo->selectRequest($request);
		return $nb_news[0]['COUNT(*)'];
	}
?>