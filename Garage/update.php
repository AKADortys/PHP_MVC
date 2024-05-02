<?php
include('connect.php');

//recup des donnees du formulaire.
$id = $_POST['id'];
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$plaques = $_POST['plaques'];
$mise_en_circu =$_POST['mise_en_circu'];
$addresse = $_POST['Addresse'];
$code_post = $_POST['Code_post'];
$ville = $_POST['Ville'];
$num_chass = $_POST['num_chass'];

//preparer la requete
$req = 'UPDATE client SET Nom = :nom, Prenom = :prenom, plaques = :plaques, mise_en_circu = :mise_en_circu, Addresse = :addresse, Code_post = :code_post, Ville  = :ville, num_chass = :num_chass WHERE id_user = :id';
$querry = $bdd->prepare($req);
$querry->bindValue(':nom',$nom);
$querry->bindValue(':prenom',$prenom);
$querry->bindValue(':plaques',$plaques);
$querry->bindValue(':mise_en_circu',$mise_en_circu);
$querry->bindValue(':addresse',$addresse);
$querry->bindValue(':code_post',$code_post);
$querry->bindValue(':ville',$ville);
$querry->bindValue(':num_chass',$num_chass);
$querry->bindValue(':id',$id);
$querry->execute();

//rediriger à index
header('Location: index.php');
exit();
?>