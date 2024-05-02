<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des clients</title>
    <link rel="stylesheet" href="../CSS/index.css" > 
</head>

<body>
    <a href="add.php">Créer un client</a>
    <section>
        <h1>Liste des clients</h1>
        <ol>
        <?php while ($data = $req->fetch(PDO::FETCH_ASSOC)) { ?>
                <li><?= $data['Prenom']; ?> <?= $data['Nom']; ?> <a href="modify.php?id=<?= $data['id']?>">modifier</a> <a href="delete.php?id=<?= $data['id']?>">Supprimer</a></li>
        <?php } ?>
        </ol>
    </section>
</body>

</html>