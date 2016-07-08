<?php 

class Sportif
{
	public $force;
	//PAr convention,  les constantes s'écrivent en MAJUSCULES sans "$"
	const NAME 			= "Footballer";
	const FORCE_LOW 	= 0;
	const FORCE_MEDIUM 	= 50;
	const FORCE_HIGH 	= 100;
	//const FORCE_ARRAY 	= []; //une constante peut-être un tableau

	//creation constructeur $force
	function __construct($force)
	{
		//la propriété $this force initialisera la proriété $force
		$this->force = $force;
		if($force == self:: FORCE_MEDIUM){
			echo"sportif ayant une force moyenne de ". $force;
		}
	}
}

class Champion
{
	const FORCE_MEDIUM = 500;
}

class Tennisman extends Sportif
{
	const NAME = 'Tennisman';
}






echo Sportif::NAME.' ' ;//ajout séparateur .' ' pour faire beau

//creation/instentation de la classe Sportif: on lui donne une force de 50!
//$s = new Sportif(50); instentation aveugle, on ne sait pas à quoi correspond "50"

//creation/instentation de la classe Sportif: on lui donne une force de 50 lié à une constante!
$s = new Sportif(Champion:: FORCE_MEDIUM); //$s est un objet appartenant à la classe Sportif

echo Tennisman::NAME;// la classe fille a écrasé la constante de la classe parente


echo$s->NAME; // non valable, NAME n'est pas une propriété de l'objet mais une constante de classe
 ?>