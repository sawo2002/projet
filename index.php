<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
</html>
<body>
       <header class="header">
            <div class="container">
                
                    <img src="./images/logo.png" alt="">
                    
                <ul class="ul">
                    <li><a href="">Accueil</a></li>
                    <li><a href="inscription.html">Reservation</a></li>
                    <li><a href="reservation.html">Se connecter</a></li>
                </ul>
            
            </div>
       </header>


       <main class="main">
        <div class="container">
            <div class="jumbo">
                <h1>Bienvenue, <br>Trouvez votre voiture a reserver avec GO Voyages</h1>
                <p>Vous cherchez une location de voiture pour votre prochain voyage ? 
                    Que vous partiez en France ou à l'étranger, pour le plaisir ou pour le travail, 
                    le comparateur de location de voitures de GO Voyages vous permettra de trouver la meilleure offre pour votre véhicule de location.
                </p>
                <button class="btn">Voir plus de details</button>
            </div>
        </div>
        <div class="container">
            <div class="jumbo-trum">
                <h2>La liste de nos voitures</h2>
                <table class="table">
                    <thead>
                        <th>Id</th>
                        <th>Matricule</th>
                        <th>Marque</th>
                        <th>Vitesse</th>
                        <th>Option</th>
                    </thead>   
                    
                    <tbody>
                         
                    

                        <?php
                            include("connexion.php");
                            $res = "select * from voiture";
                            $result=mysqli_query($conn, $res);
                            if (mysqli_num_rows($result)>0){
                                while($row= mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo"<td>".$row['id']."</td>";
                                    echo"<td>".$row['matricule']."</td>";
                                    echo"<td>".$row['marque']."</td>";
                                    echo"<td>".$row['vitesse']."</td>";
                                    echo "<td><a href=\"inscription.html?id=$row[id]\">Reserver</a></td>";
                                    echo"</tr>";
                                }
                            }
                        //     include("connexion.php");
                        //     $res = "select voiture.matricule, voiture.marque, 
                        //     voiture.vitesse, filiere.description from voiture inner join 
                        //     reservation on reservation.id= voiture.id_res;"
                        //     $result=mysqli_query($conn, $res);
                        //     if (mysqli_num_rows($result)>0){
                        //         while($row= mysqli_fetch_assoc($result)){
                        //             echo '<tr>';
                        //             echo"<td>".$row['id']."</td>";
                        //             echo"<td>".$row['matricule']."</td>";
                        //             echo"<td>".$row['marque']."</td>";
                        //             echo"<td>".$row['vitesse']."</td>";
                        //             echo "<td><a href=\"inscription.html?id=$row[id]\">Reserver</a></td>";
                        //             echo"</tr>";
                        //         }
                        //     }
                        // ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="part">
                <div class="patenaire">
                    <center><h2>Nos partenaires</h2></center>
                </div>
                <div class="img">
                    <img src="images/téléchargement (1).png" alt="">
                    <img src="images/images (2).jpeg" alt="">
                    <img src="images/images (3).jpeg" alt="">
                </div>
            </div>
        </div>
        <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="link">
                    <ul class="footer-contact">
                        <li>
                            <img src="images/call-white.svg" alt="">
                            <span>+221 234 45 09</span>
                        </li>
                        <li>
                            <img src="images/map-white.svg" alt="">
                            <span>GO VOYAGE , SENEGAL , DAKAR</span>
                        </li>
                    </ul>
                    <div class="socials-network">
                        <li><a href=""><img src="images/facebook.svg" alt=""></a></li>
                        <li><a href=""><img src="images/linkedin.svg" alt=""></a></li>
                        <li><a href=""><img src="images/Twitter.svg" alt=""></a></li>
                    </div>
                </div>
            </div>
        </div>
   </footer>

   <script src="js/jquery=3.7.1.min.js"></script>
</body>
</html>