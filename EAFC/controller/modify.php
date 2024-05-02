<?php
include('../connect.php');
include('../model/model.php');
$cnx = connect();

// Vérifier si l'ID du client est passé dans l'URL
if (isset($_GET['id'])) {
    $id_client = $_GET['id'];

    // Création d'une nouvelle instance de la classe User
    $userInstance = new User($cnx);
    $userInstance->setId($id_client);

    // Appel de la méthode AfficheUser pour récupérer les informations sur le client
    $client = $userInstance->afficheUser($id_client);

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nouveau_nom = $_POST['nom'];
        $nouveau_prenom = $_POST['prenom'];
        $id = $_POST['id'];

        // Modification du client dans la base de données
        $userInstance->modifClient($nouveau_nom, $nouveau_prenom);

        header("Location: main.php");
        exit();
    }
} else {
    echo "ID de client non spécifié.";
}

include('../vue/vue_modify.php');
?>
