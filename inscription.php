<?php
session_start();
// si l'utilisateur est pas connecté, on lui redirige vers son profil
if(isset($_SESSION['user_id']) || isset($_SESSION['user_email']))
{
    header('Location:profile.php');
    exit();
} 
include_once('config/database.php'); //connexion à la base de donnée

if(isset($_POST['register']))
{
    $errors = []; // tableau pour l'ensemble des erreurs
    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['phone'])
      && !empty($_POST['password']) && !empty($_POST['password_confirm']))
    {
        extract($_POST);
        // validation des champs
        if(strlen($nom) < 6)
        {
            $errors[] = "Nom d'utilisateur trop court";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errors[] = "Adresse eamil incorrect";
        }
        if(strlen($password) < 8)
        {
            $errors[] = "Mot de passe trop court, minimum 8 caractères";
        }else{
            if($password != $password_confirm)
            {
                $errors[] = "Les deux mot de passe ne concordent pas";
            }
        }
        // on verifie si le mail est déjà utiliserr
        $q = $db->prepare("SELECT id FROM users WHERE email=:email");
        $q->execute(['email' => $email]);
        if($q->rowCount())
        {
            $errors[] = "Adresse mail déjà utilisé";
        }
        $q->closeCursor();
        // on verifie si le phone est déjà utiliser
        $q = $db->prepare("SELECT id FROM users WHERE telephone=:telephone");
        $q->execute(['telephone' => $phone]);
        if($q->rowCount())
        {
            $errors[] = "Numéro de téléphone déjà utilisé";
        }
        $q->closeCursor();

        if(count($errors) == 0)
        {
            //il n'a pas d'erreur alors on enregistre les infos
            $q = $db->prepare("INSERT INTO users(name, email, telephone, password) 
                        VALUES(:name, :email, :telephone, :password)");
            $q->execute([
                'name' => $nom,
                'email' => $email,
                'telephone' => $phone,
                'password' => sha1($password)
            ]);
            $_SESSION['registration'] = "Votre compte a été crée avec succès, veuillez vous inscrire";
            header('Location:Connexion.php');
            exit();
        }


    }else{
        $errors[] = 'Veuillez remplir tous les champs';
    }
      
}

// la page d'inscription
include_once('template/inscription.view.php');
