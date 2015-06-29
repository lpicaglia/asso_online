<?php
if(isset($_POST['page'])){
	$controller = $_POST['page'];
	if($controller == 'registration'){
		if(!isset($_POST['name']) || !isset($_POST['mail'])){
			require('controller/c_welcome.php');
		}
		else{
			require('controller/c_registration.php');
		}
	}
	elseif($controller == 'valid_registration'){require('controller/c_valid_registration.php');}
	elseif($controller == 'search'){require('controller/c_search.php');}
	elseif($controller == 'main'){require('controller/c_userpage.php');}
	elseif($controller == 'disconnect'){require('controller/c_disconnect.php');}
	elseif($controller == 'profil'){require('controller/c_profil.php');}
	elseif($controller == 'addNews'){require('controller/c_add_news.php');}
	else{header('location:404.html');}
} else {
	//Si on ne spécifie pas de controller, on ouvre la page de présentation
    require('controller/c_welcome.php');
}
?>