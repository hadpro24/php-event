<?php

include_once('config/database.php'); //connexion à la base de donnée

$query = $db->query("SELECT * FROM event");
$data = $query->fetchALL(PDO::FETCH_OBJ);

include_once('template/events.view.php');

// la page des evenements