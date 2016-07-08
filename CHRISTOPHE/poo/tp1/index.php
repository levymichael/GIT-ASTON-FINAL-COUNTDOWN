<?php

require_once("boot.php");




$connection = new Database();
$db= $connection->connection();

$sth=$db->query("SELECT * FROM user");
$sth->execute();
$result=$sth->fetch(PDO::FETCH_ASSOC);
//print_r($result);


//echo $result['firstName'];
//echo $result['lastname'];


echo '<h1>Liste des utilisateurs</h1>';
echo '<a href="user_form.php">Ajouter un utilisateur</a>';


//Afficher la liste

$user = new User();
$users = $user->findAll();


echo '<table>';
foreach ($users as $u) {
	echo '<tr>';
	echo '<td>' . $u->getFullName() . '</td>';
	echo '<td><a href="user_form.php?id='.$u->id.'">Update</a></td>';
	echo '<td><a href="user_delete.php?id='.$u->id.'">Delete</a></td>';
	echo '</tr>';
}
echo '</table>';

?>