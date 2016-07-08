<?php 
error_reporting(1);
include_once 'dbConnect.php';

switch ($_REQUEST ['method']) {
	case 'getAuteurs':
		$res = $pdo->prepare('SELECT * FROM auteur');
		$res->execute();
		$res = $res->fetchAll(PDO::FETCH_ASSOC);
		break;
	case 'getAuteurById':
		$res = $pdo->prepare('SELECT * FROM auteur WHERE id_auteur = ?');
		$res->execute(array($_REQUEST['id_auteur']));
		$res = $res->fetchAll(PDO::FETCH_ASSOC);
		break;
	case 'addAuteur':
		$data = json_decode(file_get_contents('php://input'), true);
		$res = $pdo->prepare('INSERT INTO auteur (nom, prenom, fonction) VALUES (?, ?, ?)');
		$res->execute(array($data['nom'], $data['prenom'], $data['fonction']));
		$res = true;
		break;
	case 'deleteAuteur': 
		$data = json_decode(file_get_contents('php://input'), true);
		$res = $pdo->prepare('DELETE FROM auteur WHERE id_auteur = ?');
		$res->execute(array($data['id_auteur']));
		$res = true;
		break;
	case 'editAuteur':
		$data = json_decode(file_get_contents('php://input'), true);
		$res = $pdo->prepare('UPDATE auteur SET nom = ?, prenom = ?, fonction = ? WHERE id_auteur =?');
		$res->execute(array($data['nom'], $data['prenom'], $data['fonction'],  $data['id_auteur']));
		$res = true;
		break;
	default:
		break;
}
echo json_encode($res);