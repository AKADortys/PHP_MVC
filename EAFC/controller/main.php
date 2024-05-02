<?php 
include('../connect.php');
include('../model/model.php');
$cnx = connect();
$userInstance = new User($cnx);
$req = $userInstance->afficheClient();
include('../vue/vue_main.php');
?>
