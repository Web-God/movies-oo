<?php
	namespace Controller;
	class DefaultController
	{	
		public function fourofour(){
			header("HTTP/1.0 404 Not Found");
			include("views/errors/error_404.php");
		}
		/**
		* affiche la page d'accueil
		*/
		public function home()
		{
			$movieManager = new\Model\MovieManager();
			$movies = $movieManager->getRandomMovies();
			//ptr($movies);
			include("views/home.php");
		}
		/**
		*affiche la page details d'un film
		*/
			public function details()
		{
			$movieManager = new \Model\MovieManager();
			$movie = $movieManager->find($_GET['id']);

			include("views/details.php");
		}
	}