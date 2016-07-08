
<?php

class User
{
	//attributs (ci dessous)
	private $db;
	public $id;
	public $firstName;
	public $lastname;
	public $email;

	private static $database; //variante si contexte statique

	public function __construct() //fonction magique
	{
			$connection = new Database();
			$this->db = $connection->connection();
	}
	//methode statique = méthode  de classe invoqué par le ::(ci-dessous)
	
	public static function countAll()//retounr le nombre d'utilisatuers dans la table
	{
		$connection = new Database();
		self::$database = $connection->connection();
		$sth = self::$database->query("SELECT COUNT(*) FROM user ");
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_NUM);//FETCH NUM Renvoi un tableau (et non pas un objet)
		echo $result[0];
	}



	public static function findById($id)
	{
		//variante si contexte statique
		$connection = new Database();
		self::$database = $connection->connection();
		$sth = self::$database->query("SELECT * FROM user WHERE id=".$id);
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_OBJ);

		//instantatioinsertn d'objet + hydratation
		if (!$result) {
			return false;
		}
			else{
				$user = new User();
				$user->id = $result->id;
				$user->firstName = $result->firstName;
				$user->lastname = $result->lastname;
				$user->email = $result->email;
				return $user;
			}		
	}

	public function findAll()
	{
			$sth = $this->db->query("SELECT * FROM user");
			$sth->execute();
			$results = $sth->fetchAll(PDO::FETCH_OBJ);
			
			//var_dump($results);

			$users = [];

			foreach($results as $result){
				$user = new User();
				//hydratation de l'objet: on alimente ses propriétés avec des valeurs
				$user->id = $result->id;
				$user->firstName = $result->firstName;
				$user->lastname = $result->lastname;
				$user->email = $result->email;
				$users[] = $user;
			}
			return $users;//retoune un tableau d'objets User
	}


	public function insert()
	{		//insert dans les champs firstName,lastname,email les valeurs firstName,lastname,email
		$sth = $this->db->prepare("INSERT INTO user (firstName,lastname,email)
			VALUES (:firstName,:lastname,:email)");
		$sth->bindValue("firstName",$this->firstName);
		$sth->bindValue("lastname",$this->lastname);
		$sth->bindValue("email",$this->email);

		$sth->execute();



	}

	public function update()
	{
		//update des champs firstName,lastname,email & id
		$sth = $this->db->prepare("UPDATE user SET(firstName=:firstName,lastname=:lastname,email=:email WHERE id=:id");
		$sth->bindValue("firstName",$this->firstName); //bindValue = lier valeur firstname
		$sth->bindValue("lastname",$this->lastname);  //bindValue = lier valeur lastname
		$sth->bindValue("email",$this->email);  //bindValue = lier valeur email
		$sth->bindValue("id",$this->id);  //bindValue = lier valeur id

		$sth->execute();
	}

	public function save()
	{
		/*
		if (isset($this->id)){
			this->update();	
		}else{
	$this->insert();
		}
		*/

		//notation ternaire
		//		expression 	 ? >>> true		  >>>   false
			isset($this->id) ? $this->update() : $this->insert();
	}


	public function delete()
	{
		echo "test";
		$sth = $this->db->query("DELETE FROM user WHERE id=".$this->id);
		$sth->execute();

	}

	public function getfullName()
	{
		return $this->firstName.' '.$this->lastname;
	}
}