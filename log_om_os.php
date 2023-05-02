<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hjælp.dk</title>
        <link rel="stylesheet" href="style.css"/>
 <style>
table {
        margin-top: 50px;
        margin-left: 150px;
    }
   .container {
  position: relative;
  left: 40%;
  width: 25%
  
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #AFEDF2;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
}

.text {
  color: white;
  font-size: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


</style>
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
            <li ><a href="login.php">Login/Sign up </a></li>
            <input class = "topnav" type="text" placeholder="Søg..">
        </div>

        
 <table>
  <tr>
    <th style="width:50%; font-size: 30px" > Om os:</th>
    <th style="font-size: 24px ">Lidt om os: </th> 
  </tr>
  
  <tr>
    <td style="font-size: 20px">Det hele startede med et skoleprojekt i 3g for tre unge iværksættere i vinteren 2023. Gennem et informatikprojekt fik Amalie Juel Lauenborg, Christian Egelund Hansen og Christian Rindahl Rhod lavet en prototype af det, der i dag er kendt som Hjælp.dk. Ideen baserede sig på manglende lokalhjælp, som skyldtes faldet af unges interesse i fritidsarbejde. Med jobs som rengøring, hundeluftning og vaskning af privat- såvel som firmabiler, gjorde de tre iværksættere ønsket om hjemmesiden hjælp.dk en realitet.</td>
    <td> 
     <div class="container">
         <center> <img src="Billeder/ChristianEgelund.jpeg" alt="Christian Egelund" class="image"> </center>
  <div class="overlay">
    <div class="text"> Christian egelund Hansen: </div>
  </div>
</div>   
    </td>
  </tr> 
  
 <tr>
    <td></td>
    <td> 
     <div class="container">
         <center> <img src="Billeder/AmalieJuel.jpeg" alt="Amalie Juel Lauenborg" class="image"> </center>
  <div class="overlay">
    <div class="text"> Amalie Juel Lauenborg: Jeg er 19 år og går på Sct. knuds gymnasium i 3y.</div>
  </div>
</div>   
    </td>
  </tr>  
  
  <tr>
    <td></td>
    <td> 
     <div class="container">
         <center> <img src="Billeder/Christian Rindahl.jpeg" alt="Christian Rhod" class="image"> </center>
  <div class="overlay">
    <div class="text"> Christian Rindahl Rhod:</div>
  </div>
</div>   
    </td>
  </tr>  
  
</table>       

    </body>
</html>

