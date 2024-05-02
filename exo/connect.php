<?php

$dsn = 'mysql:host=database-container;dbname=exo;charset=utf8';

$user='root';

$pass='php_mysql_pass';

try{

    $cnx = new PDO($dsn,$user,$pass);

}

catch(PDOException $e){
    echo 'une erreur est survenue !';
}