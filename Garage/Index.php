<?php
include('connect.php');

if(isset($_GET['ordre']))
{
    switch($_GET['ordre'])
    {
        case 'id_user';
        case 'Prenom':
        case 'plaques':
        case 'mise_en_circu':
        case 'Addresse':
        case 'Code_post':
        case 'Ville':
        case 'num_chass':
            $ordre = $_GET['ordre'];
            break;
        default:
            $ordre = 'Nom';
    }
} else{
    $ordre = 'nom';
}
?>
<form method="GET" action="index.php">
    <select name="ordre">
        <option value="id_user" <?php if($ordre=='id_user') echo 'selected'?>>Identifiant</option>
        <option value="Nom" <?php if($ordre=='Nom') echo 'selected'?>>Nom</option>
        <option value="Prenom" <?php if($ordre=='Prenom') echo 'selected'?>>Prenom</option>
        <option value="plaques" <?php if($ordre=='plaques') echo 'selected'?>>Plaques</option>
        <option value="mise_en_circu" <?php if($ordre=='mise_en_circu') echo 'selected'?>>Mise en circulation</option>
        <option value="Addresse" <?php if($ordre=='Addresse') echo 'selected'?>>Adresse</option>
        <option value="Code_post" <?php if($ordre=='Code_post') echo 'selected'?>>cp</option>
        <option value="Ville" <?php if($ordre=='Ville') echo 'selected'?>>Ville</option>
        <option value="num_chass" <?php if($ordre=='num_chass') echo 'selected'?>>Numéro de châssis</option>
    </select>
    <input type="submit" value="Appliquer">
    <a href="Ajout.php">Ajouter</a>
</form>
<?php
$req = $bdd->query('SELECT * FROM client ORDER BY ' . $ordre);

echo '<table style="background-color:grey; border: 2px outset red; text-align:center;"><tr>
<td>Id client</td>
<td>nom</td>
<td>prenom</td>
<td>plaques</td>
<td>Mise en circulation</td>
<td>Adresse</td>
<td>Code postal</td>
<td>Ville</td>
<td>Numéro de chassis</td>
<td>Modifications</td></tr>';

while ($donnees = $req->fetch()) {
    echo '<tr><td style="padding:10px 15px;">' . $donnees['id_user'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['Nom'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['Prenom'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['plaques'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['mise_en_circu'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['Addresse'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['Code_post'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['Ville'] . '</td>';
    echo '<td style="padding:10px 15px;">' . $donnees['num_chass'] . '</td>';
    echo '<td style="padding:10px 15px;"><a style="margin: 0 15px; padding: 10px 5px; text-decoration:none;" href="modify.php?id='.$donnees['id_user'].'">Modifier</a><a onclick="return confirm(\'Voulez-vous vraiment supprimer cet élément ?\')" style="margin: 0 15px; padding: 10px 5px; text-decoration:none;" href="delete.php?id='.$donnees['id_user'].'">Supprimer</a></td>';
}

echo '</table>';
