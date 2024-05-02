<?php $civilite = isset($_GET['civilite']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $civilite == 'homme' ? 'Bonjour monsieur' : 'Bonjour madame' ?></h1>
</body>
</html>