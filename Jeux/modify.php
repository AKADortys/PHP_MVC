<?php
include('connection.php');

// Vérifier si l'ID est passé en paramètre
if(isset($_GET['id'])) {
    // Récupérer l'ID
    $id = $_GET['id'];
    
    // Récupérer les données à modifier depuis la base de données en fonction de l'ID
    $query = "SELECT * FROM jeux_video WHERE ID =".$id;
    $req = $bdd->prepare($query);
    $req->execute();
    $donnees = $req->fetch();
    
    // Afficher le formulaire avec les données à modifier pré-remplies
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nom :</td> <td><input type="text" name="nom" value="<?php echo $donnees['nom']; ?>"></td>
            </tr>
            <tr>
                <td>Possesseur :</td> <td><input type="text" name="possesseur" value="<?php echo $donnees['possesseur'];?>"></td>
            </tr>
            <tr>
                <td>console :</td> <td><input type="text" name="console" value="<?php echo $donnees['console'];?>"></td>
            </tr>
            <tr>
                <td>Prix :</td> <td><input type="number" min="0" name="prix" value="<?php echo $donnees['prix'];?>"></td>
            </tr>
            <tr>
                <td>Nombres joueurs Max :</td> <td><input type="number" min="1" name="nbre_joueurs_max" value="<?php echo $donnees['nbre_joueurs_max'];?>"></td>
            </tr>
            <tr>
                <td>Commentaires :</td> <td><textarea type="text" name="commentaires"><?php echo $donnees['commentaires'];?></textarea></td>
            </tr>
            <tr>
                <td>Date de Vente :</td> <td><input type="date" name="date_vente" value="<?php echo $donnees['date_vente'];?>"></td>
            </tr>
            <tr>
                <td colspan="2" ><input type="submit" value="Modifier"></td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $donnees['ID']; ?>">
    </form>
    <?php
} else {
    echo '<h1>Il n\'y a rien à modifier ici !</h1>';
}
?>
