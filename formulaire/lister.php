<?php
require_once('connection.php');

$sqlSelect = "SELECT * FROM utilisateurs";
$stmtSelect = $conn->prepare($sqlSelect);
$stmtSelect->execute();
$resultats = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tableau utilisateurs</h1>
    <table>
        <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>Date de naissance</th>
        <th>civilité</th>
        </tr>
        <?php foreach ($resultats as $utilisateur) : ?>
                    <tr>
                        <td><?= htmlspecialchars($utilisateur['nom']); ?></td>
                        <td><?= htmlspecialchars($utilisateur['prenom']); ?></td>
                        <td><?= htmlspecialchars($utilisateur['date_de_naissance']); ?></td>
                        <td><?= $utilisateur['civilite']; ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>
</body>
</html>