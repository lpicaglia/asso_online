<?php
	require_once('model/PDO.php');

	function getNbNews($id){
		$pdo = PdoSio::getPdoSio();
		$nb_news = $pdo->selectRequest("SELECT COUNT(*) 
										FROM news 
										WHERE id_asso = ".$id.";");
		return $nb_news[0]['COUNT(*)'];
	}

	function ajouterNews($title, $content){
		$pdo = PdoSio::getPdoSio();
		return $pdo->insertRequest($title, $content);
	}

	function getNews($id){
		$pdo = PdoSio::getPdoSio();
		$news = $pdo->selectRequest("SELECT id_news, lib_news, maj_news 
									 FROM news 
									 WHERE id_asso = ".$id."
									 ORDER BY maj_news desc;");
		return $news;
	}
?>