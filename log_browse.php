<?php 
@include "config.php";

$sel = "SELECT * FROM user_form"; 
$query = mysqli_query($conn, $sel); 
$resul = mysqli_fetch_assoc($query); 
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hjælp.dk</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    
    <div class="header">
        <h1> <a href="index.php" style="text-decoration: none;" style="text-align: center">Hjælp.dk</a></h1>
    </div>
    
    <body>
    <div class="navbar">
            <li><a href="log_browse.php">Browse</a></li>
            <li><a href="log_profil.php">Profil</a></li>
            <li><a href="log_kontakt.php">Kontakt</a></li>
            <li><a href="log_om_os.php">Om os</a></li>
            <li ><a class = "name"> 
            <?php
            session_start(); 
                if(session_id())
                {
                    echo "Velkommen ". $resul["name"]; 
                }
                else
                {
                    echo "Login/sign up"; 
                }
            ?>
            </a></li>
            <input class = "topnav" type="text" placeholder="Søg..">
        </div>
        <?php
        // put your code here
        ?>
        <div class= "main-browse" style=" margin-left: 300px; margin-right: 10%; margin-top: 5%;">
            <h1>Søg nye jobs</h1>
            <p style="line-height: 2.0; font-size:20px;">
                Her kan man søge eller oprette nye jobs.
            </p>
            <h2>Seneste opslag:</h2>

            <div>
                <div class="wrapper" style="margin-left: -100px;">
                    <div class="post_1">
                        <div class="post_1_tekst" with = "300" height = "300">
                            <h3>Hunde pasning:</h3>
                            <p>
                            Tid: d. 17/6 kl: 14:00
                            <br>
                            Løn: 100kr. i timen, 2+ timer. 
                            <br>
                            Adresse: Lindved Møllevej 20
                            <br>
                            Tlf: 20533242
                            <br>
                            Beskrivelse:
                            <br>
                            Jeg søger en, som kan passe min hund Jørgen d. 17/6 kl: 14:00, da jeg bliver student på dette tidspunkt. Alt information står tidligere i dette opslag. 
                            <p>
                            <div class="post_1_post">
                                <center><img src="billeder/post_1.jpg" width="300" heigth="300"></>
                            </div>
                        </div>
                    </div>
                
                    <div class="post_2">
                        <div class= "post_2_tekst">
                            <h3> Babysitter</h3>
                            <p>
                            Tid: d. 17/6 kl: 14:00
                            <br>
                            Løn: 100kr. i timen, 2+ timer. 
                            <br>
                            Adresse: Lindved Møllevej 20
                            <br>
                            Tlf: 20533242
                            <br>
                            Beskrivelse:
                            <br>
                            Jeg søger en, som kan passe min hund Jørgen d. 17/6 kl: 14:00, da jeg bliver student på dette tidspunkt. Alt information står tidligere i dette opslag. 
                            <p>
                            <div class="post_2_post">
                                <center><img src="billeder/post_2.jpg" width="185" heigth="150"></center>
                            </div>

                        </div>
                            
                    </div> 
                    
                    <div class="post_3">
                        <div class= "post_3_tekst">
                            <h3> Babysitter</h3>
                            <p>
                            Tid: d. 17/6 kl: 14:00
                            <br>
                            Løn: 100kr. i timen, 2+ timer. 
                            <br>
                            Adresse: Lindved Møllevej 20
                            <br>
                            Tlf: 20533242
                            <br>
                            Beskrivelse:
                            <br>
                            Jeg søger en, som kan passe min hund Jørgen d. 17/6 kl: 14:00, da jeg bliver student på dette tidspunkt. Alt information står tidligere i dette opslag. 
                            <p>
                            <div class="post_3_post">
                                <center><img src="billeder/post_3.jpg" width="185" heigth="150"></center>
                        
                            </div>

                        </div>
                    </div> 
                    

                    <?php 
                        $con = mysqli_connect("localhost", "root", "", "opslag"); 

                        if(isset($_POST["submit"])){
                            $titel = mysqli_real_escape_string($con, $_POST["titel"]); 
                            $tid = mysqli_real_escape_string($con, $_POST["tid"]); 
                            $løn = mysqli_real_escape_string($con, $_POST["løn"]); 
                            $adresse = mysqli_real_escape_string($con, $_POST["Adresse"]); 
                            $tlf = mysqli_real_escape_string($con, $_POST["tlf"]);
                            $beskrivelse = mysqli_real_escape_string($con, $_POST["beskrivelse"]); 
                            
                            $billede = $_FILES["billede"]["name"]; // Get the name of the uploaded file
                            $tempname = $_FILES["billede"]["tmp_name"]; // Get the temporary name of the uploaded file
                            $folder = "uploads/" . $billede; // Set the folder where the uploaded file will be saved
                            
                            // Move the uploaded file to the specified folder
                            move_uploaded_file($tempname, $folder);

                            $insert = "INSERT INTO opslag_db(titel, tid, løn, Adresse, tlf, beskrivelse, billede)
                                    VALUES('$titel', '$tid', '$løn', '$adresse', '$tlf', $beskrivelse, '$billede')";
                            
                            $stmt = mysqli_prepare($con, $insert);
                            mysqli_stmt_bind_param($stmt, "sssssss", $titel, $tid, $løn, $adresse, $tlf, $beskrivelse, $billede);
                            mysqli_stmt_execute($stmt); 
                            mysqli_stmt_close($stmt);

                            header("location:log_browse.php"); 
                        }   
                    ?>
                    <div class="tilføj_selv">
                        <div class= "tilføj_tekst">
                            <h2>Lav selv et opslag!</h2>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h3>Titel <input type="text" name="titel"></h3>
                                <p>
                                Tid: <input type="date" name="tid" width="50px;">
                                <br>
                                Løn: <input type="number" name="løn" required placeholder=" fx. 100kr"> 
                                <br>
                                Adresse: <input type="text" name="Adresse">
                                <br>
                                Tlf: <input type="tel" name="tlf" required placeholder="+45">
                                <br>
                                Beskrivelse:
                                <br>
                                <textarea placeholder="Skriv jobbet, så godt som muligt" style="height:200px" name="beskrivelse" required placeholder="Beskriv dit job, så godt som muligt"> </textarea>
                                <br>
                                <label for ="file">Tilføj billede:</label>
                                <input type="file" id="file" name="billede">
                                <p>
                                <input type="submit" name="submit" value="Send" class="Del_opslag">
                            </form>
                        </div>
                    </div>    
            </div>
        </div>
        </div>
    </body>
</html>