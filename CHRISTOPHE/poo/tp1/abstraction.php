<?php


abstract class Sportif
{
	abstract public function hello(); //méthode abstraite, elle devra être implementée (avoir un corps {} dans la classe fille)
	public function bye()
	{
		echo "bye";
	}
}

class Footballer extends Sportif
{//on implémente la fonction abstraite définie dans la classe parente
	public function hello()
	{
		echo "hello";
	}
}

//$s = new Sportif(); il est interdit d'instancier une class abstraite.
//la classe abstraite sert de base générique aux classes filles qui héritent d'elles

$f = new Footballer();

$f->hello();
echo "<br/>";
$f->bye(); 
$t = new Tennisman();

$t->bye(); //correct, la methode bye() est normalement implémentée dans la classe parente et héritée par a classe fille

//$t->hello();Fatal Error, la classe Tennisman n'a pas implémenté la méthode abstraite hello()

?>