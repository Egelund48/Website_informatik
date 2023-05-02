<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="form-container">
        <form action="" method="post">
            <h3>register<h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>'; 
                }; 
            }; 

            ?>
            <input type="name" name="name" required placeholder="Skriv dit navn">
            <input type="email" name="email" required placeholder="Skriv din email">
            <input type="password" name="password" required placeholder="Skriv dit kodeord">
            <input type="password" name="cpassword" required placeholder="Godkend dit kodeord">
            <select name="user_type">
                <option value="Jobsøger">Jobsøger</option>
                <option value="Joblaver">Job laver</option>
            </select>
            <input type="submit" name="submit" value="register" class="form-btn">
            <p>Har du allerde en konto? <a href="login.php">Login her</a></p>
        </form>
    </div>
        
    </body>
</html>