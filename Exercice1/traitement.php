<!DOCTYPE HTML>
<html>
<head>    
</head>
<body>
    <?php session_start();
        echo "Bonjour ".$_POST['nom'];
        echo $_POST['sexe'];
        if (isset($_POST['cb'])) {
            echo $_POST['cb'];
        }
        
        foreach($_POST['loisirs'] as $loisir) {
            echo $loisir;
        }
    ?>
</body>

</html>