<?php

$servername = "database-container";
$username = "root";
$password = "php_mysql_pass";

try {
  $bdd = new PDO("mysql:host=".$servername.";dbname=garage", $username, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connecté à la base de données";
} catch(PDOException $e) {
  echo "Erreur de connection: " . $e->getMessage();
}
?>