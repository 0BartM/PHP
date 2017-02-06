<?php
    $panier=["pomme","poire"];
    setcookie("panier",NULL,time()+36000);
    foreach ($panier as $article) {
        setcookie("panier[$article]",0);
    }
    echo "panier vide créé.";
?>

<a href="panier.php"> Voir le panier </a>
<br>
<a href="index2.php">Modifier le panier</a>