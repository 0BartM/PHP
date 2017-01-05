<!DOCTYPE HTML>
<html>
<head>    
</head>
<body>
    <form method="POST" action="traitement.php">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="">
        <input type="text" id="prenom" name="prenom" value="">
        <input type="submit" id="bouton" name="bouton" value="Zou !">
        <input type="radio" name="sexe" value="homme" selected>
        <input type="radio" name="sexe" value="femme">
        <input type="checkbox" name="cb" value="ok">
        <select name="annee">
            
            <?php
                    for ($annee=1900;$annee<2017;$annee++) {
            echo "<option value=\"$annee\">$annee</option>";
        }
            ?>
        </select>
        <input type="checkbox" value="cinema" name="loisirs[]">
    </form>
</body>

</html>