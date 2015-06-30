<?php
	require_once('model/PDO.php');

	function getNbNews($id){
		$pdo = PdoSio::getPdoSio();
		$nb_news = $pdo->selectRequest('SELECT COUNT(*) 
										FROM news 
										WHERE id_asso = '.$id.';');
		return $nb_news[0]['COUNT(*)'];
	}

	function setNews($values){
		$pdo = PdoSio::getPdoSio();
		return $pdo->insertRequest('news', $values);
	}

	function getNews($id){
		$pdo = PdoSio::getPdoSio();
		$news = $pdo->selectRequest('SELECT id_news, lib_news, maj_news 
									 FROM news 
									 WHERE id_asso = '.$id.'
									 ORDER BY maj_news desc;');
		return $news;
	}

	function modifyNews($id, $content){
		$pdo = PdoSio::getPdoSio();
		$pdo->actionRequest('UPDATE news SET lib_news = "'.$content.'" WHERE id_news = '.$id.';');
	}

	function deleteNews($id){
		$pdo = PdoSio::getPdoSio();
		$pdo->actionRequest('DELETE FROM news WHERE id_news = '.$id.';');
	}

	function getAllNews(){
		$pdo = PdoSio::getPdoSio();
		$news = $pdo->selectRequest('SELECT id_news, lib_news, maj_news, id_asso
									 FROM news
									 ORDER BY maj_news desc;');
		return $news;
	}

	function getNbTotalNews(){
		$pdo = PdoSio::getPdoSio();
		$nb_news = $pdo->selectRequest('SELECT COUNT(*) 
										FROM news;');
		return $nb_news[0]['COUNT(*)'];
	}

	function getInfoNews($id){
		$pdo = PdoSio::getPdoSio();
		$news = $pdo->selectRequest('SELECT a.id_asso, a.nom_asso, a.logo_asso 
									 FROM association a, news n
									 WHERE a.id_asso = n.id_asso
									 AND n.id_asso = '.$id.';');
		return $news[0];
	}
?>