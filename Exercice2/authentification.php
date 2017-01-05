<?php session_start();
    $login=$_POST['login'];
    $mdp=md5($_POST['mdp']);

    $cle=new mysqli('localhost','root','root','utilisateurs');
    $reponse=$cle->query("SELECT * FROM users WHERE login='$login' AND mdp='$mdp'");


    
    if($reponse->num_rows==1) {
//  if($login=="toto" AND $mdp=="tata") {
        $_SESSION['log']=$login;
        header("location:fichier.php");
    } else {
        header("location:formulaire.php");
    }

?>
