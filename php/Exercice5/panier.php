<?php
    $panier=$_COOKIE["panier"];
    foreach($panier as $article =>$nb) {;
        echo "$article : $nb<br>";
    }

?>