
<?php
/*
Exercice

Créer un object (une classe) User
propriétés : firstName, lastName, age
methode : getFullName qui renvoie la concaténation de firstName + lastName
*/





class User
{
	private $db;
	private $id;
	public $firstName;
	public $lastName;
	public $email;

	public function __construct()
	{
			$connection = new Database();
			$this->db = $connection->connection();
	
	}


	public function findAll()
	{
			$sth=$this->db->query("SELECT * FROM user");
			$sth->execute();
			$results=$sth->fetchAll(PDO::FETCH_OBJ);
			//var_dump($results);
			return $results;
	}







	public function insert()
	{


	}


	public function update($id)
	{

	}


	public function delete($id)
	{

	}
}
