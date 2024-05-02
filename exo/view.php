<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css.css">
    <title>Document</title>
</head>
<body>
    <section>
        <h1><?= $data['Nom'] ?></h1>
        <p>
            <img src="Image/<?= $data['Image']; ?>" alt="<?= $data['Image']; ?>">
            <?= $data['Description']; ?>
        </p>
        <p>Autres langages</p>
        <ul>
            <li><a href="?LangageID=1">JavaScript</a></li>
            <li><a href="?LangageID=2">PHP</a></li>
            <li><a href="?LangageID=3">CSS</a></li>
        </ul>
    </section>
</body>
</html>