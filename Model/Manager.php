<?php 
namespace Model;

	abstract class Manager
	{
		protected $table;
		public function __construct()
		{
			$this->setTable();
		}
		abstract public function setTable();

		public function find($id)
		{
			$dbConnector = new DatabaseConnector();
			$dbh = $dbConnector->getDbh();

			$sql = "SELECT *
					FROM $this->table
					WHERE id = :id";

					$sth = $dbh->prepare($sql);
					$sth->bindValue(":id", $id);
					$sth->execute();

					$row = $sth->fetch();
					return $row;
		}
	}