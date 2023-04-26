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
        <h1> <a href="index.php" style="text-decoration: none;" style="text-align: center;">Hjælp.dk</a></h1>
    </div>
    <body>
        <?php
        // put your code here
        ?>
        <div class="navbar">
            <li><a href="browse.php">Browse</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="om_os.php">Om os</a></li>
            <li ><a href="login.php">
            <?php
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
    <div style="height:600px; margin-left: 300px; margin-right: 25%; margin-top: 5%;">
        <h1>Kontakt</h1>
        <p style="line-height: 2.0; font-size:20px;">
            Kontakt os:  
        </p>
    </div>
    </body>
</html>
