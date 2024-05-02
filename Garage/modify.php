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

if(isset($_GET['id'])){

    $id=$_GET['id'];

    //préparer la requete
    $query = 'SELECT * FROM client WHERE id_user ='.$id;
    $req = $bdd->prepare($query);
    $req->execute();
    $donne = $req->fetch();
?>
<form action="update.php" method="post">
    <table>
        <tr>
            <td>Nom :</td> <td><input type="text" name="Nom" value="<?php echo $donne['Nom']; ?>"></td>
        </tr>
        <tr>
            <td>Prénom :</td> <td><input type="text" name="Prenom" value="<?php echo $donne['Prenom']; ?>"></td>
        </tr>
        <tr>
            <td>Plaques :</td> <td><input type="text" name="plaques" value="<?php echo $donne['plaques']; ?>"></td>
        </tr>
        <tr>
            <td>Mise en circulation :</td> <td><input type="date" name="mise_en_circu" value="<?php echo $donne['mise_en_circu']; ?>"></td>
        </tr>
        <tr>
            <td>Addresse :</td> <td><input type="text" name="Addresse" value="<?php echo $donne['Addresse']; ?>"></td>
        </tr>
        <tr>
            <td>Code postal :</td> <td><input type="number" name="Code_post" value="<?php echo $donne['Code_post']; ?>"></td>
        </tr>
        <tr>
            <td>Ville :</td> <td><input type="text" name="Ville" value="<?php echo $donne['Ville']; ?>"></td>
        </tr>
        <tr>
            <td>Numéro de châssis :</td> <td><input type="number" name="num_chass" value="<?php echo $donne['num_chass']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Modifier"></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?php echo $donne['id_user']; ?>">
</form>

<?php } else {
    echo '<h1>Il n\'y a rien à modifier ici !</h1>';
}
?>