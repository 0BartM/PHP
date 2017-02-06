<?php
    $panier=$_COOKIE["panier"];
    foreach($panier as $article =>$nb) {;
        echo "$article : $nb<br>";
    }

?>
<a href=traitement2.php>Ajouter 1 article</a>