<?php

	namespace Model;
	/**
	* Récupère x films au hazard depuis la table movies
	*/
	class MovieManager
	{
		public function find($id){
			$dbConnector = new DatabaseConnector();
			$dbh = $dbConnector->getDbh();

			$sql = "SELECT *
					FROM movies
					WHERE id = :id";

					$sth = $dbh->prepare($sql);
					$sth->bindValue(":id", $id);
					$sth->execute();

					$movies = $sth->fetch();
					return $movies;
		}

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