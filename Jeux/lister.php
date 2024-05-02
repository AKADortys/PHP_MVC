<?php
require_once('connection.php');

$sqlSelect = "SELECT * FROM jeux_video";
$stmtSelect = $bdd->prepare($sqlSelect);
$stmtSelect->execute();
$resultats = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding: 10px;
            border:3px solid black
        }
        th{
            color: red;
            font-size: large
        }
        h1{
            text-align: center
        }
    </style>
</head>
<body>
    <h1>tableau jeux</h1>
    <table style="border: solid black 2px">
        <tr>
        <th>nom</th>
        <th>posseseur</th>
        <th>Console</th>
        <th>prix</th>
        <th>nbr joueurs</th>
        <th>commentaires</th>
        <th>date vente</th>
        </tr>
        <?php foreach ($resultats as $jeu) : ?>
                    <tr>
                        <td><?= htmlspecialchars($jeu['nom']); ?></td>
                        <td><?= htmlspecialchars($jeu['possesseur']); ?></td>
                        <td><?= htmlspecialchars($jeu['console']); ?></td>
                        <td><?= htmlspecialchars($jeu['prix']); ?></td>
                        <td><?= htmlspecialchars($jeu['nbre_joueurs_max']); ?></td>
                        <td><?= htmlspecialchars($jeu['commentaires']); ?></td>
                        <td><?= htmlspecialchars($jeu['date_vente']); ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>
</body>
</html>