<?php
    $panier=$_COOKIE["panier"];
    foreach ($panier as $article =>$nb) {
        $n=$_POST[$article];
        setcookie("panier[$article]",$n);
    }
?>

<a href="panier.php">Panier</a>