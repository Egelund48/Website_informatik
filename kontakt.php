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
        <h1>
            <b>Hvordan kan vi hjælpe dig?</b>
        </h1>
        <p style="line-height: 2.0; font-size:20px;">
            Kontakt os:  
            Føler du dig snydt af hjælper, eller mangler sælger at sende penge 
            så sidder vores kundeservice klar fra 08-13 man-fre og 09-12 lør. <br>
            Du kan kontakte os på telefon 12345678 eller på email: hjælp.dk@kundeservice.com <br>
            Du kan også skrive en besked nedenfor, hvor vores kundeservice hurtigst muligt vil kontakte dig.
            
        <form action="process-kontakt.php" method="post">
            
            <label for="name">Dit fulde navn:</label>
            <input type="text" id="name" name="name">
            
            <div class="message">
                <label for="message">Hvordan kan vi hjælpe dig?</label>
                <textarea id="message" name="message"></textarea>
            </div> 
            <br>
            
            <label for="titel">Titel</label> 
            
            <select id="title" name="titel">
                    <option value="1">Jobsøger</option>
                    <option value="2">Joblaver</option>
                    <option value="3">Andet</option
            </select>
            <br>
            
            <fieldset>
                <legend>Type af besked</legend>
            
                <label>
                    <input type="radio" name="type" value="1">
                    Snyderi
                </label>
                
                <br>
                
                <label>
                    <input type="radio" name="type" value="2">
                    Klage
                </label>
                
                <br>
            
                <label>
                    <input type="radio" name="type" value="3">
                    Forslag
                </label>
                
                <br>
                
                <label>
                    <input type="radio" name="type" value="4" checked>
                    Andet
                </label>
            </fieldset> 
            <br
        
            <label>
                <input type="checkbox" name="terms">
                Jeg erklærer mig enig i hjælp.dk's retningslinjer og behandling af personfølsomme oplysninger
            </label>
        
            <br> 
            <button type="submit" name="submit" value="Send">Send</button>
        </form>
        </p>
    </div>
    </body>
</html>
