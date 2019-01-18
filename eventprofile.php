<?php
session_start();
// si l'utilisateur n'est pas connecté, il ne doit pouvoir y acceder
if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']))
{
    header('Location:index.php');
    exit();
} 
include_once('config/database.php'); //connexion à la base de donnée

$query = $db->prepare("SELECT * FROM event WHERE id_users=:user_id");
$query->execute([
    'user_id' => $_SESSION['user_id']
]);
$data = $query->fetchALL(PDO::FETCH_OBJ);


// la page de la liste des events profile
include_once('template/event_profile.view.php');
