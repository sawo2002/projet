
<?php
    include("connexion.php");
    
    // echo"connection reussi"."<br>";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $date= htmlspecialchars($_POST['date-res']);
        $id_voiture_res= htmlspecialchars($_POST['id-voiture-res']);
        $id_users= htmlspecialchars($_POST['id-users']);
        $marque= htmlspecialchars($_POST['marque']);

        echo"<h2>information recue</h2>";
        echo"<p>date-res:$date</p>";
        echo"<p>id-voiture-res:$id_voiture_res</p>";
        echo"<p>id-users:$id_users</p>";
        echo"<p>marque:$marque</p>";
    }else{
        echo"pas de donnees recue";
    }
    $req= "insert into reservation(date-res,id-voiture-res,id-users,marque)
    values('$date','$id_voiture_res','$id_users','$marque')";

    if(mysqli_query($conn,$req)){
        echo"joueurs bien ajouter".'<br>';
    }else{
        echo"echec d'enregistrement";
    }
?>


<!-- <a href="index.php">la liste des joueurs</a> -->