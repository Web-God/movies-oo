<?php

	namespace Model;
	/**
	* 
	*/
	class MovieManager extends Manager
	{		

		public function setTable()
		{
			$this->table = "movies";
		}
	/**
	* Récupère x films au hazard depuis la table movies
	*/
	
		public function getRandomMovies()
		{
			$dbConnector = new DatabaseConnector();
			$dbh = $dbConnector->getDbh();

			$sql = "SELECT id, title, year, imdb_id
					FROM movies
					ORDER BY RAND()
					LIMIT 30";

					$sth = $dbh->prepare($sql);
					$sth->execute();

					$movies = $sth->fetchAll();
					return $movies;
		}
	}