<head>
    <meta charset="utf-8">
    <style>
        form{
            width: 60%;
            background-color: grey;
            border: 2px solid black;
            margin: 10px auto;
            padding: 5px;
        }

        input{
            width: 50%;
        }
        table{
            width: 95%;
            text-align: center;
        }

        td{
            padding: 10px 5px;
        }
    </style>
</head>
<?php 
include('connect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //les données du formulaire

    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $plaques = $_POST['plaques'];
    $mise_en_circu = $_POST['mise_en_circu'];
    $Addresse = $_POST['Addresse'];
    $Code_post = $_POST['Code_post'];
    $Ville = $_POST['Ville'];
    $num_chass = $_POST['num_chass'];
    
    //Preparer la requete
    $req = 'INSERT INTO client (Nom, Prenom, plaques, mise_en_circu, Addresse, Ville, Code_post, num_chass) VALUES (:Nom, :Prenom, :plaques, :mise_en_circu, :Addresse, :Ville, :Code_post, :num_chass)';
    $querry = $bdd->prepare($req);

    //lier les données du formulaire à la requete
    $querry->bindValue(':Nom',$Nom);
    $querry->bindValue(':Prenom',$Prenom);
    $querry->bindValue(':plaques',$plaques);
    $querry->bindValue(':mise_en_circu',$mise_en_circu);
    $querry->bindValue(':Addresse',$Addresse);
    $querry->bindValue(':Code_post',$Code_post);
    $querry->bindValue(':Ville',$Ville);
    $querry->bindValue(':num_chass',$num_chass);

    $querry->execute();

    //rediriger vers index
    header('Location: index.php');
    exit();
}
?>
<a href="index.php">Accueil</a>
<form method="post" action="Ajout.php">
    <table>
        <tr>
            <td>Nom :</td> <td><input type="text" name="Nom"></td>
        </tr>
        <tr>
            <td>Prenom :</td> <td><input type="text" name="Prenom"></td>
        </tr>
        <tr>
            <td>Plaques :</td> <td><input type="text" name="plaques"></td>
        </tr>
        <tr>
            <td>Mise en circulation :</td> <td><input type="date" name="mise_en_circu"></td>
        </tr>
        <tr>
            <td>Addresse :</td> <td><input type="text" name="Addresse"></td>
        </tr>
        <tr>
            <td>Code postal :</td> <td><input type="number" name="Code_post"></td>
        </tr>
        <tr>
            <td>Ville :</td> <td><input type="text" name="Ville"></td>
        </tr>
        <tr>
            <td>Numéro de châssis :</td> <td><input type="number" name="num_chass"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Ajouter"></td>
        </tr>
    </table>
</form>