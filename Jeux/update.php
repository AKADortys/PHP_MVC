<?php
include('connection.php');

//récupérer les données du formualaire modify.php
    $ID = $_POST['id'];
    $nom = $_POST['nom'];
    $possesseur = $_POST['possesseur'];
    $console = $_POST['console'];
    $prix = $_POST['prix'];
    $nbre_joueurs_max = $_POST['nbre_joueurs_max'];
    $commentaire = $_POST['commentaires'];
    $date_vente = $_POST['date_vente'];
//préparer la requête
$query = 'UPDATE jeux_video SET nom = :nom, possesseur = :possesseur, console = :console, prix = :prix, nbre_joueurs_max = :nbre_joueurs_max, commentaires = :commentaire, date_vente = :date_vente WHERE ID = :id';
$req= $bdd->prepare($query);
$req->bindValue(':nom', $nom);
$req->bindValue(':possesseur', $possesseur);
$req->bindValue(':console', $console);
$req->bindValue(':prix', $prix);
$req->bindValue(':nbre_joueurs_max', $nbre_joueurs_max);
$req->bindValue(':commentaire', $commentaire);
$req->bindValue(':date_vente', $date_vente);
$req->bindValue(':id', $ID);
$req->execute();

//rediriger à l'index.
header("Location: index.php"); 
exit();
?>