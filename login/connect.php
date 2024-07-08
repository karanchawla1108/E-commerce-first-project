<?php

$host = "localhost";
$user = "karan.chawla";
$pass = "UVVV6AKH";
$db = "karanchawla_login";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Failed to connect to database: " . $conn->connect_error);
}

?>
