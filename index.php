<?php
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
	if($controller == 'registration'){require('controller/c_registration.php');}
	elseif($controller == 'search'){require('controller/c_search.php');}
	elseif($controller == 'connect'){require('controller/c_connect.php');}
	else{header('location:/404page');}
} else {
	//Si on ne spécifie pas de controller, on ouvre la page de présentation
    require('controller/c_welcome.php');
}
?>