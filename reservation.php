
<?php

    include("connexion.php");
    session_start();
    if (isset($_POST['connecter'])){
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        $req = "SELECT id FROM users WHERE nom d'utilisateur='$login' and mot de passe='$mdp'";
        $result = mysqli_query($conn, $req);

        if(mysqli_num_rows($result)==1){
            $_SESSION['login']=$login;
            header("location:reserver.php");
        }else{
            $error = "nom d'utilisateur ou mdp incorrect";
        }
    }
    mysqli_close($conn);
?>    


