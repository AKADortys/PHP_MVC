<?php
function connect() {
    $dsn = 'mysql:host=database-container;dbname=EAFC;charset=utf8';
    $user = 'root';
    $pass = 'php_mysql_pass';
    
    try {
        $cnx = new PDO($dsn, $user, $pass);
        return $cnx;
    } catch(PDOException $e) {
        echo 'une erreur est survenue !'.$e;
        exit();
    }
}
?>
