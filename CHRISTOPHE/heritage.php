<?php  

class Sportif
{
	public $name = "Paul Pogba";
	private $age;

	function getName()
	{
		return $this->name;
	}

}

class Footballer extends sportif
{
	/**public $name;
	public $age;

	function getName()
	{
		return $this->name;
	}**/


//heritage
	public $name = "el flaco";
	public $buts = 56;

	function getNbGoals()
	{
		return $this->buts;
	}
}

class Tennisman extends sportif
{
	/**public $name;

	function getName()
	{
		return $this->name;
	}**/


//heritage

}

//instances:

/**$sportif = new Sportif();
$sportif->name = "Alessandro del Piero";
echo $sportif -> name;

var_dump($sportif);

$footballer= new Footballer();
$footballer->name="paul Pogba";
echo $footballer->name;

var_dump($footballer);

$footballer2= new Footballer();
var_dump($footballer2);

$footballer->name="David Beckam";
echo $footballer->getName();

$footballer2->name="Gattuso";
echo $footballer2->getName();
**/

$footballer=new Footballer();
$tennisman = new Tennisman();

var_dump($footballer);
var_dump($tennisman);

$footballer->name = "Maradona";
echo $footballer->getName();

echo $footballer->getNbGoals();


?>