<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/res.css">
</head>
<body>
        <header class="header">
            <div class="container">
                
                    <img src="./images/logo.png" alt="">
                    
                <ul class="ul">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="inscription.html">Reservation</a></li>
                    <li><a href="reservation.html">Se connecter</a></li>
                </ul>
            
            </div>
       </header>
        <main class="main">
        <div class="container">
            <div class="jumbo-trum">
                <center><h2>La liste de nos voitures reserves</h2></center>
                <table class="table">
                    <thead>
                        <th>id_res</th>
                        <th>Date_res</th>
                        <th>id-voiture-res</th>
                        <th>id-users</th>
                        <th>marque</th>
                        <th>Option</th>
                    </thead>   
                    
                    <tbody>
                         
                    

                        <?php
                            $user= "root";
                            $mdp ="";
                            $bd = "projet";
                        
                            $conn = mysqli_connect("localhost:3307", $user, $mdp, $bd) 
                            or die("erreur de connexion".mysqli_errno($conn));
                            $res = "select reservation.date_res,reservation.marque,reservation.id_res,reservation.id_voiture_res,reservation.id_users from reservation
                             inner join users on users.id= reservation.id_users";
                            $result=mysqli_query($conn, $res);
                            if (mysqli_num_rows($result)>0){
                                while($row= mysqli_fetch_assoc($result)){

                                    echo '<tr>';
                                    echo"<td>".$row['id_res']."</td>";
                                    echo"<td>".$row['date_res']."</td>";
                                    echo"<td>".$row['id_voiture_res']."</td>";
                                    echo"<td>".$row['id_users']."</td>";
                                    echo"<td>".$row['marque']."</td>";
                                    echo "<td><a href=\"jointure.html?id_res=$row[id_res]\">Annuler la reservation</a></td>";
                                    echo"</tr>";
                                   
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
       <center><a href="ajouter_voit.php">Ajouter une Reservation</a></center> 
</body>
</html>