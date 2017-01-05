<?php session_start();

    $login=$_POST['login'];
    $mdp=md5($_POST['mdp']);

    $cle=new mysqli('localhost','root','root','utilisateurs');

    $reponse=$cle->query("SELECT * FROM users WHERE login='$login' AND mdp='$mdp'");
    
    if(isset($_GET['error'])) {
        echo "Login déjà pris.";
    }

    if($reponse->num_rows==1) {
        $_SESSION['log']=$login;
        header("location:acces.php");
    } else {
        $reponse=$cle->query("INSERT INTO users(login, mdp) VALUES('$login', '$mdp')");
        header("location:inscription.php");
    }



?>
