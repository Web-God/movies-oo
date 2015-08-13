<?php
	include("functions.php");
	include("config.php");
	spl_autoload_register();
	$controller = new Controller\DefaultController();
	//ptr($_GET);
	if (empty($_GET))
	{
		//accueil
		$controller->home();
	}
	//['p'] est passé dans l'url dans le htaccess
	elseif ($_GET['p']=="details/") {
		//details du film
		$controller->details();
	}
	else{
		$controller->fourofour();
	}
?>
