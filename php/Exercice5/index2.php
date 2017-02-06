<?php
    $panier=$_COOKIE["panier"];
    setcookie("panier",NULL,time()+36000);
?>

<form action="traitement.php" method="post">

        <?php
            foreach($panier as $a=>$nb) {
                echo "$a <input type='text' name='$a' value='$n'>";
            }
        ?>
    
    <input type="submit">
</form>