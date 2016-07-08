<?php

class Database
{

//public $connection;

	public function connection()
	{
		$db = new PDO('mysql:host=localhost;dbname=poo','root','');
		return $db; //retour d'un objet PDO
	}
}
  ?>