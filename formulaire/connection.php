<?php

$servername = "database-container";
$username = "root";
$password = "php_mysql_pass";

try {
  $conn = new PDO("mysql:host=".$servername.";dbname=gestion_utilisateurs", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>