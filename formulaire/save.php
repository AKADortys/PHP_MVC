<?php
require_once('connection.php');

print_r($_POST);
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$naissance = isset($_POST['naissance']) ? $_POST['naissance'] : '';
$civilite = isset($_POST['civilite']) ? $_POST['civilite'] : '';

$data = [
    'nom' => $nom,
    'prenom' => $prenom,
    'naissance' => $naissance,
    'civilite' => $civilite
];
$sql = "INSERT INTO utilisateurs (nom, prenom, date_de_naissance, civilite) VALUES (:nom, :prenom, :naissance, :civilite)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);
?>
