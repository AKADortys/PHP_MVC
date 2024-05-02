<?php

$servername = "database-container";
$username = "php_test_user";
$password = "php_user_pass";

try {
  $bdd = new PDO("mysql:host=".$servername.";dbname=Jeux", $username, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Erreur de connection: " . $e->getMessage();
}
?>