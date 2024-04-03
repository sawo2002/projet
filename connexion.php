<?php 
    
    $user= "root";
    $mdp ="";
    $bd = "projet";

    $conn = mysqli_connect("localhost:3307", $user, $mdp, $bd) 
    or die("erreur de connexion".mysqli_errno($conn));
?>