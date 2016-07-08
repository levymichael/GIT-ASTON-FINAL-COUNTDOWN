Index.php VFinal
Personnes
Clément ABS <clement.abs@gmail.com>  jul 4 à 5h03 PM
À	
michaël levy
Corps du message
<?php

require_once("user.php");
require_once("Database.php");


$connection = new Database();
$db= $connection->connection();

$sth=$db->query("SELECT * FROM user");
$sth->execute();
$result=$sth->fetch(PDO::FETCH_ASSOC);
print_r($result);


echo $result['firstName'];

echo '<h1>Liste des utilisateurs</h1>';
echo '<button>Ajouter un utilisateur</button>';


//Afficher la liste

$user= new User();
$users =$user->findAll();

foreach ($users as $u) {

	echo $u->firstName;
	echo $u->lastName;

	echo $u->getFullName();

}

<?php

require_once("user.php");
require_once("Database.php");


$connection = new Database();
$db= $connection->connection();

$sth=$db->query("SELECT * FROM user");
$sth->execute();
$result=$sth->fetch(PDO::FETCH_ASSOC);
print_r($result);


echo $result['firstName'];

echo '<h1>Liste des utilisateurs</h1>';
echo '<button>Ajouter un utilisateur</button>';


//Afficher la liste

$user= new User();
$users =$user->findAll();

foreach ($users as $u) {

	echo $u->firstName;
	echo $u->lastName;

	echo $u->getFullName();

}

JJ San sur 
