<?php
include('../connect.php');
include('../model/model.php');
$cnx = connect();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nouveau_nom = $_POST['nom'];
    $nouveau_prenom = $_POST['prenom'];

    // Création d'une instance de la classe User
    $user = new User($cnx);

    // Définition du nom et du prénom de l'utilisateur
    $user->setNom($nouveau_nom);
    $user->setPrenom($nouveau_prenom);

    // Ajouter le client
    $user->ajouteClient();

    header("Location: main.php");
    exit();
}

include('../vue/vue_add.php');
?>
