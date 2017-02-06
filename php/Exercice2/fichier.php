<?php session_start();
if(!isset($_SESSION['log'])) {
    header("location:formulaire.php");
}

echo $_SESSION['log'];

?>

<a href="dec.php">Déconnexion</a>