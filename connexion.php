<?php
session_start();
// si l'utilisateur est pas connecté, on lui redirige vers son profil
if(isset($_SESSION['user_id']) || isset($_SESSION['user_email']))
{
    header('Location:profile.php');
    exit();
} 
include_once('config/database.php'); //connexion à la base de donnée

if(isset($_POST['login']))
{
    $errors = []; // tableau pour l'ensemble des erreurs
    if(!empty($_POST['email']) or !empty($_POST['password']))
    {
        //on verify les infos
        extract($_POST);
        $q = $db->prepare("SELECT id, email FROM users 
              WHERE (email=:email OR telephone=:email) AND password=:password");
        $q->execute([
            'email' => $email, 
            'password' => sha1($password)
        ]);
        if($q->rowCount())
        {
            $data = $q->fetch(PDO::FETCH_OBJ);
            $_SESSION['user_id'] = $data->id;
            $_SESSION['user_email'] = $data->email;
            header('Location:profile.php');
            exit();
        }else{
            $errors[] = "La combinaison Identifiant/Mot de passe incorrecte";
        }

    }else{
        $errors[] = "Veuillez remplir tous les champs";
    }
      
}

// la page d'inscription
include_once('template/connexion.view.php');
session_destroy();
