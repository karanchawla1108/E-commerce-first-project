<?php
include("connect.php"); // Include the file where $conn is defined

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    // Assuming $conn is already established as a connection to the database
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if($result !== false && $result->num_rows > 0){
        echo "This Email is already Registered!";
    }
    else{
        $insertQuery = "INSERT INTO users (`id`, `firstName`, `lastName`, `email`, `password`) VALUES (NULL,'$firstName', '$lastName', '$email', '$password')";

        if($conn->query($insertQuery) === TRUE){
            header("Location: indexforlogin.php");
            exit(); // Added exit() to stop script execution after redirect
        }
        else{
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if($result !== false && $result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit(); // Added exit() to stop script execution after redirect
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}
?>
