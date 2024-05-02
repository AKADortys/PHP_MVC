<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="POST" action="save.php">
        <table>
            <tr>
                <td> Nom:</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>Prenom:</td>
                <td><input type="text" name="prenom"></td>
            </tr>
            <tr>
                <td>Date de naissance:</td>
                <td><input type="date" name="naissance"></td>
            </tr>
            <tr>
                <td>Civilite:</td>
                <td><select  name="civilite">
                    <option value="homme">Monsieur</option>
                    <option value="femme">Madame</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td><input type="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>