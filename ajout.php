<!--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<style>
    form {
        background-color: #2cd3e1;
        padding: 36px;
        margin: 24px;
        width: 34%;
        height: 60%;
        box-shadow: 0 7px 12px rgba(12, 3, 3, 0.3);
    }

    input {
        padding: 8px;
        margin: 5px;
    }
</style>
<body>
    <form action="" method="post">
        <label for="">Date-res</label>
        <input type="date" name="date-res">
        <label for="">id-voiture-res</label>
        <input type="number" name="id-voiture-res">
        <label for="">id-users</label>
        <input type="number" name="id-users">
        <label for="">marque</label>
        <input type="text" name="marque">
        <input type="button" name="submit" value="ajouter">
    </form>

    <?php

    include("connexion.php");

    if(isset($_POST['submit'])){
        $date = $_POST['date-res'];
        $id_voiture_res = $_POST['id-voiture-res'];
        $id_users = $_POST['id-users'];
        $marque = $_POST['marque'
        $res = "insert into reservation(date-res, id-voiture-res, id-users, marque)values 
        ('$date','$id_voiture_res', '$id_users', '$marque')";
        $result = mysqli_query($conn, $res);
        if (mysqli_query($conn,$req)) {
            header("location:reserver.php");
            echo "ajout de voiture reussi";
        }
        else {
            echo "echec d'jout de voiture :".mysqli_error($conn);
        }
    }
    mysqli_close($con
    echo "<font color='green'>ajout réussie.";
	echo "<br/><a href='index.php'>La liste des joueurs</a>";
?>
</body>
</html>