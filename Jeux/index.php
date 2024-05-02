<?php
include('./connection.php');



// Gestion du tri
if(isset($_GET['ordre'])) {
    switch($_GET['ordre']) {
        case 'possesseur':
        case 'console':
        case 'prix':
            case 'nbre_joueurs_max':
                $ordre = $_GET['ordre'];
                break;
                default:
                $ordre = 'nom';
            }
        } else {
            $ordre = 'nom';
        }
        
        // Formulaire de tri
        ?>
        <head>
            <style>
        
                body{
                    background-color:grey;
                }
        
                a{
                    background-color : greenyellow;
                    border: solid black 2px;
                    margin: 0 5px;
                    padding : 10px 5px;
                    text-decoration : none;
                }
        
                td{
                    padding:10px 5px;
                }
                
            </style>
        </head>
        <body style="display: flex; flex-wrap:wrap;">
<form method="GET" action="index.php">
    <select name="ordre">
        <option value="nom" <?php if($ordre=='nom') echo 'selected'?>>Nom</option>
        <option value="possesseur" <?php if($ordre=='possesseur') echo 'selected'?>>Possesseur</option>
        <option value="console" <?php if($ordre=='console') echo 'selected'?>>Console</option>
        <option value="prix" <?php if($ordre=='prix') echo 'selected'?>>Prix</option>
        <option value="nbre_joueurs_max" <?php if($ordre=='nbre_joueurs_max') echo 'selected'?>>Nombre de joueurs max</option>
    </select>
    <input type="submit" name="appliquer" value="Appliquer">
</form>
<a href="Ajout.php">Ajouter un jeu</a>

<?php
// Requête SQL avec le tri
$req = $bdd->query('SELECT * FROM jeux_video ORDER BY ' . $ordre);

// Tableau HTML
echo '<table style="background-color:aliceblue; color: green; text-align:center;" border="1" >';
echo '<tr><th>Nom</th><th>Possesseur</th><th>Console</th><th>Prix</th><th>Nb de joueurs</th><th>Commentaires</th><th>Modifications</th></tr>';

while ($donnees = $req->fetch()) {
    echo '<tr><td>' . $donnees['nom'] . '</td>';
    echo '<td>' . $donnees['possesseur'] . '</td>';
    echo '<td>' . $donnees['console'] . '</td>';
    echo '<td>' . $donnees['prix'] . '</td>';
    echo '<td>' . $donnees['nbre_joueurs_max'] . '</td>';
    echo '<td>' . $donnees['commentaires'] . '</td>';
    echo '<td><a href="modify.php?id='.$donnees['ID'].'">Modifier</a><a href="delete.php?id=' . $donnees['ID'] .'" onclick="return confirm(\'Voulez-vous vraiment supprimer cet élément ?\')">Supprimer</a></td></tr>';

}
echo '</table></body>';
?>

