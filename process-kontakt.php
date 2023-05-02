<?php

$name = $_POST["name"];
$message = $_POST["message"];
$titel = filter_input(INPUT_POST, "titel", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FLITER_VALIDATE_BOOL); 

$servername="localhost";
$username="root";
$password="root";
$dbname="message_db";


$conn = mysqli_connect($servername, $username, $password, $dbname); 

 
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql="INSERT INTO message (name, body, titel, type)
     VALUES ('$name', '$message', '$titel', '$type')";

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ssii",
        $name, 
        $message,
        $titel,
        $type);

mysqli_stmt_execute($stmt);

echo "Besked er sendt. Kundeservice melder hurtigst muligt tilbage.";
header("logget_ind.php"); 
