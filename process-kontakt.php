<?php

$name = $_POST["name"];
$message = $_POST["body"];
$titel = filter_input(INPUT_POST, "titel", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FLITER_VALIDATE_BOOL); 

$host="localhost";
$dbname="message_db";
$username="root";
$password="root";

$conn = mysqli_connect($host, $username, $password, $dbname); 

 
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql="INSERT INTO message (name, body, titel, type)
     VALUES ($name, $message, $titel, $type)";

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
