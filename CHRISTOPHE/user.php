<!--exercice:

créer un object(class) User
propriétés: firstName, lastName, age

methode : getFullName qui renvoie la concaténation de firstName + lastName


-->


<?php

class User
{
	//attributs (ci dessous)
	public $firstName;
	public $lastName;
	public $age = 4;

	
	//__XXXXX : methode magique invoquée automatiquement à l'instanciation (instanciation=new XXX) de la classe
	/**function __construct($firstName,$lastName) 
	{
		echo 'classe instanciée';
		$this -> firstName = $firstName;
		$this -> lastName = $lastName;
	}**/

	function __construct($options=[])
	{
		$this -> firstName=$options['firstName'];
		$this -> lastName =$options['lastName'];
	}


	//methods une fonction à l'interieur d'une class s'appele une méthode
	function getFullName()
	{
		return $this -> firstName.'  '. strtoupper($this->lastName);
	}
}

//instances

/*$var = new User();
$var -> firstName = "Joy";
$var -> lastName = "LEVY";
echo $var -> getFullName();
echo $var -> age; //afficher attribut age*/

/*$var2 = new User('Antonio','Conte'); //new user = constructeur
echo $var2 -> getFullName();*/

$options = [
	'firstName' => 'Michel',
	'lastName' => 'Rocard'
];
$var3 = new User($options);
echo $var3-> getFullName();


  ?>
