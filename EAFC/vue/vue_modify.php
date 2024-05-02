
<?php foreach($client as $ligne): ?>
    <form action="modify.php?id=<?php echo $id_client?>" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" value="<?php echo $ligne['Nom']; ?>"><br>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" value="<?php echo $ligne['Prenom']; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $id_client; ?>">
    <input type="submit" value="Modifier">
    <?php endforeach; ?>
</form>
