<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";

$conn = mysqli_connect("localhost", "root", "", "journalsystem");

if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>