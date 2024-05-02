<?php
include('../connect.php');
include('../model/model.php');
$cnx = connect();

// Vérifier si l'ID de l'utilisateur est spécifié dans l'URL
if (isset($_GET['id'])) {
    // Récupérer l'ID de l'utilisateur depuis l'URL
    $id_client = $_GET['id'];

    // Création d'une instance de la classe User
    $user = new User($cnx);

    // Définition de l'ID de l'utilisateur à supprimer
    $user->setId($id_client);

    // Supprimer l'utilisateur
    $user->suppClient();

    // Redirection vers la page principale
    header("Location: main.php");
    exit();
} else {
    echo 'ID non-spécifié !';
}
?>
