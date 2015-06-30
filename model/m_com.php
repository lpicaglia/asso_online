<?php
	require_once('model/PDO.php');

	function getNbCom($id){
		$pdo = PdoSio::getPdoSio();
		$nb_coms = $pdo->selectRequest('SELECT COUNT(*) 
										FROM com 
										WHERE id_news = '.$id.';');
		return $nb_coms[0]['COUNT(*)'];
	}

	function getComs($id){
		$pdo = PdoSio::getPdoSio();
		$nb_coms = $pdo->selectRequest('SELECT lib_com, maj_com, id_com
										FROM com 
										WHERE id_news = '.$id.'
										ORDER BY maj_com desc;');
		return $nb_coms[0];
	}

?>