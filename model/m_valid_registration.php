<?php
	require_once("model/PDO.php");

	function createAccount($values){
    	$pdo = PdoSio::getPdoSio();
    	$pdo->insertRequest('association(nom_asso,mail_asso,mdp_asso,adr_asso,cplt_adr_asso,cp_asso,ville_asso,tel_asso,descr_asso,fb_asso,twt_asso,link_asso,id_theme)', $values);
	}
?>