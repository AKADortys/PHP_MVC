<?php
include('connection.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $possesseur = $_POST['possesseur'];
    $console = $_POST['console'];
    $prix = $_POST['prix'];
    $nbre_joueurs_max = $_POST['nbre_joueurs_max'];
    $commentaire = $_POST['commentaires'];
    $date_vente = $_POST['date_vente'];
    

    // Préparation de la requête d'insertion
    $querry = 'INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires, date_vente) VALUES (:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires, :date_vente)';
    $req = $bdd->prepare($querry);

    // Liaison des paramètres avec bindValue
    $req->bindValue(':nom', $nom);
    $req->bindValue(':possesseur', $possesseur);
    $req->bindValue(':console', $console);
    $req->bindValue(':prix', $prix);
    $req->bindValue(':nbre_joueurs_max', $nbre_joueurs_max);
    $req->bindValue(':commentaires', $commentaire);
    $req->bindValue(':date_vente', $date_vente);

    $req->execute();

    // Redirection vers la page principale après l'ajout
    header('Location: index.php');
    exit();
}
?>

<!-- Formulaire d'ajout -->
<form action="Ajout.php" method="post">
    <table>
        <tr>
            <td>Nom :</td> <td><input type="text" name="nom" id="nom"></td>
        </tr>
        <tr>
            <td>Posseseur :</td> <td><input type="text" name="possesseur" id="possesseur"></td>
        </tr>
        <tr>
            <td>Console :</td> <td><input type="text" name="console" id="console"></td>
        </tr>
        <tr>
            <td>Prix :</td> <td><input type="number" min="0" name="prix" id="prix"></td>
        </tr>
        <tr>
            <td>Nombre de joueurs MAX :</td> <td><input type="number" min="1" name="nbre_joueurs_max" id="nbre_joueurs_max"></td>
        </tr>
        <tr>
            <td>Commentaire :</td> <td><textarea name="commentaires" id="commentaires" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Date de vente :</td> <td><input type="date" name="date_vente" id="date_vente"></td>
        </tr>
        <tr>
            <td colspan="2" ><input type="submit" value="Ajouter"></td>
        </tr>
    </table>
</form>
