<?php
session_start();
include("connect.php"); // Added missing semicolon



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <div style="text-align: center; padding:15%;">
    <p style="font-size:50px; font-weight:bold;"> <!-- Fixed typo in 'font_weight' to 'font-weight' -->
    Thank you sign up 
    <?php
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email';"); // Added missing semicolon
        while($row = mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
    } 
    ?>
    </p>

    <!-- !-- Add a button to redirect to index.html -->
    <button onclick="window.location.href = 'https://ysjcs.net/~karan.chawla/wbm_asignment_final/';">Go to Index</button>
    </div> 
</body>
</html>
