<?php

define('DB_HOST', 'ec2-54-235-77-0.compute-1.amazonaws.com');
define('DB_NAME', 'dbrgds4vk0gpup');
define('DB_USERNAME', 'oeggtoeibmdmpw');
define('DB_PASSWORD', '4659736a15e973a4402b5318b08f1d964e73d81e330a3ba3e4d31d556bb445dd');

try
{
    $db = new PDO("pgsql:host=".DB_HOST.";port=5432;dbname=".DB_NAME, 
           DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die('Erreur : '.$e->getMessage());
}

