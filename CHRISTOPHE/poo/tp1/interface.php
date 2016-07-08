<?php

interface Format
{
	public function textFormat($input);
	public function htmlFormat($input);
}


abstract class Document implements Format
{
	public function textFormat($text)
	{
		return $text . '(modifié par textFormat)';
	}
	public function htmlFormat($property)
	{
		//$tis->property est résolu dynamiquemet dans le contexte de l'objet qui appelle la méthode
		//si l'objet $a appelle cette méthode, $this-> property devient à l'execution $a->title
		return $this->$property;
	}
}
class book extends Document
{
	public $title;
}

class Article extends Document
{
	public $issueYear = 2016;
}

$b = new Book();
$a = new Article();

echo $b->textFormat('<a>blablabla');
echo'</br>';
echo $a->htmlFormat('issueYear'); //l'objet $a appelle la méthode htmlFormat avec la propriété ().
//on donne en entrée de la méthode htmlFormat la propriété (lié au contexte de l'objet) qu'elle doit formater.
//L'objet $a retourne une version formatée de sa propriété title

?>
