<?php
session_start();
// si l'utilisateur n'est pas connecté, il ne doit pouvoir y acceder
if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']))
{
    header('Location:index.php');
    exit();
} 
include_once('config/database.php'); //connexion à la base de donnée

if(isset($_POST['register']))
{
    $errors = []; // tableau pour l'ensemble des erreurs
    if(!empty($_POST['title']) && !empty($_POST['adresse']) && !empty($_POST['date'])
      && !empty($_POST['content']))
    {
        extract($_POST);
        // validation des champs
        if(strlen($title) < 3)
        {
            $errors[] = "Titre de l'evenement trop court";
        }

        if(count($errors) == 0)
        {
            //il n'a pas d'erreur alors on enregistre les infos
            $q = $db->prepare("INSERT INTO event(id_users, title, contenu, date_event, adresse_event, created_at) 
                        VALUES(:id_users, :titre, :contenu, :date_event, :adresse_event, NOW())");
            $q->execute([
                'id_users' => $_SESSION['user_id'],
                'titre' => $title,
                'contenu' => $content,
                'date_event' => $date,
                'adresse_event' => $adresse,
            ]);
            $success = "Votre evenement a été crée avec succès.";
        }


    }else{
        $errors[] = 'Veuillez remplir tous les champs';
    }
      
}


// la page d'inscription
include_once('template/profile.view.php');
