<?php
session_start();

include_once('config/database.php'); //connexion à la base de donnée

$query = $db->prepare("SELECT * FROM event WHERE id=:id");
$query->execute([
    'id' => $_GET['id']
]);
// si l'evenement n'existe pas, on le retourne
if(!$query->rowCount())
{
    header('Location:index.php');
}
$data = $query->fetchAll(PDO::FETCH_OBJ);
$query->closeCursor();

// si il y'a une reservation, on la traite
if(isset($_POST['reserver']))
{
    extract($_POST);
    $errors = [];
    if(!empty($name) && !empty($email))
    {
        if(strlen($name) < 3)
        {
            $errors[] = "Nom complet trop court";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errors[] = "Adresse eamil incorrect";
        }
        //on verfie s'il n'a pas déjà reservé
        $q = $db->prepare("SELECT id FROM reservation WHERE email=:email");
        $q->execute(['email' => $email]);
        if($q->rowCount())
        {
            $errors[] = "Adresse mail déjà utilisé";
        }
        $q->closeCursor();

        // s'il y'a pas d'erreur
        if(count($errors) == 0)
        {
            // s'il a renseigné un comentaire
            if(!empty($commentaire))
            {
                $q = $db->prepare("INSERT INTO reservation(id_event, name, email, commentaire) 
                        VALUES(:id_event, :name, :email, :commentaire)");
                $q->execute([
                    'id_event' => $_GET['id'],
                    'name' => $name,
                    'email' => $email,
                    'commentaire' => $commentaire,
                ]);
            }else{
                $q = $db->prepare("INSERT INTO reservation(id_event, name, email) 
                        VALUES(:id_event, :name, :email)");
                $q->execute([
                    'id_event' => $_GET['id'],
                    'name' => $name,
                    'email' => $email
                ]);
            }
            $q->closeCursor();
            $success = "Votre place a été reservé avec succès.";

        }
    }else{
        $errors[] = "Vous devez au moins reseignez votre nom complet et l'adresse mail";
    }
}

// on recupere les nombres de place reservé
$qry = $db->prepare("SELECT id from reservation where id_event=:id_event");
$qry->execute([
    'id_event' => $_GET['id']
]);
$nombre = $qry->rowCount();
$qry->closeCursor();

include_once('template/event.view.php');

// la page detail des evenements