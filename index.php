<?php
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
    header('location:/404page');
} else {
	//Si on ne spécifie pas de controller, on ouvre la page de présentation
    require('controller/c_welcome.php');
}
?>