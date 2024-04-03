<?php
    include 'connexion.php';

    // if(isset($_POST["ajouter"])){
    //     $dat_res = $_POST['date_res'];
    //     $id_voiture_res = $_POST['id_voiture_res'];
    //     $id_users = $_POST['id_users'];
    //     $marque = $_POST['marque'];
        
    //     // if(isset($date_res) && isset($id_voiture_res) && isset($id_users) && isset($marque)){
    //         $req="INSERT INTO reservation (date_res,marque)VALUES ('".$dat_res."','".$marque."')";
    //         if(mysqli_query($conn, $req)){
    //             header("location:reserver.php");
    //             echo "voiture ajouter avec succes";
    //         }else{
    //             echo "echec d'ajout de voiture:".mysqli_error($conn);
    //         }
    //     // }

    // }
     if(isset($_POST['ajouter'])){
        $dat_res = $_POST['date_res'];
        $id_voiture_res = $_POST['id_voiture_res'];
        $id_users = $_POST['id_users'];
        $marque = $_POST['marque'];

        $req="INSERT INTO reservation (date_res,id_voiture_res,id_users,marque)VALUES (".$dat_res."$id_voiture_res','$id_users".$marque.")";
        $result = mysqli_query($conn, $req);
    }

    mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserer_voiture</title>
</head>
<body>
      <form action="" method="post">
        <label for="">Date-res</label><br>
        <input type="date" name="date_res" required><br>
        <label for="">id-voiture-res</label><br>
        <input type="number" name="id_voiture_res" required><br>
        <label for="">id-users</label><br>
        <input type="number" name="id_users"required><br>
        <label for="">marque</label><br>
        <input type="text" name="marque" required><br>

        <input type="submit" name="ajouter" value="ajouter"><br>
    </form>

<a href="dggszgdhfgjfgjtflluddr7ldr7tulx"></a>

</body>
</html>