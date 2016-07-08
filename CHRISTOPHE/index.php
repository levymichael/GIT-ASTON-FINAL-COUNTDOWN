<?php 

class Animal
{	//attributs (ci dessous)
	public $speed = 100;
	protected $weight; //transmis par héritage
	public $height;
	private $nbFangs; //PEAR Convention non transmis par héritage

	//methods une fonction à l'interieur d'une class s'appele une méthode
	function test()
	{
		echo '<p> ciao </>';
	}
	function getSpeed()
	{
		return $this -> speed *4;//getter = accesseur
	}
	function getNbFangs()
	{
		return $this -> nbFangs;
	}
	function getWeight()
	{
		return $this -> weight;
	}
	function setWeight($weight)
	{
		$this -> weight =$weight ;//setter = mutateur
	//setter = mutateur
	}
}

//instances:
$wolf = new Animal();
echo $wolf -> speed;
// $wolf -> weight = 50; ecriture autorisée si public
// echo $wolf -> weight; lecture autorisée si public
$wolf -> setWeight(123); //ecriture autorisée si protected
echo $wolf -> setWeight();


$pegg = new Animal();
echo $pegg -> speed;
$pegg -> weight = 240;// ecriture
echo $pegg -> weight;//lecture


$wolf -> test();
$pegg -> test();
echo $wolf -> getSpeed();
// echo $pegg -> nbFangs; not good
echo $pegg -> getNbFangs;
 ?>
