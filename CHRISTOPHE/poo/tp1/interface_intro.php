<?php

interface A
{
	// une interface ne contient que des methodes. Pas de propriétés.
	public function hello();
}

interface B
{
	// une interface ne contient que des methodes. Pas de propriétés.
	public function bye();
}

class Document implements A,B
{
	public function hello()
	{
		echo "hello";
	}
	public function bye()
	{
		echo "bye";
	}
}

class Article extends Document
{

}

$d = new Document();
$d->hello();
echo "<br/>";
$d->bye();
echo "<br/>";

$a = new Article ();//nouvelle instantation d'un objet $a à partir de la classe Article
$d->hello();
echo "<br/>";
$d->bye();
echo "<br/>";


?>