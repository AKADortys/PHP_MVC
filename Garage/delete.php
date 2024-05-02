<?php
include('connect.php');

// Vérifier si l'ID est passé en paramètre
if(isset($_GET['id'])) {
    // Récupérer l'ID
    $id = $_GET['id'];
    
    
    // Effectuez la suppression dans la base de données
    $query = "DELETE FROM client WHERE id_user =".$id;
    $req = $bdd->prepare($query);
    $req->execute();
    
    // Redirigez après suppression
    header("Location: index.php"); 
    exit();
} else {
    echo "il n'y a rien à supprimer";
}
?>
