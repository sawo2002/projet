

<?php

    include("connexion.php");
    session_start();
    if (isset($_POST['connecter'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        $req = "SELECT id FROM client WHERE nom='$nom' ,prenom='$prenom' ,mail='$mail' and mdp='$mdp'";
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