<?php

$user = $_POST['username'];
$email = $_POST['email'];
$country = $_POST['country'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['pass']) || !isset($_POST['country']) || $pass == $cpass) {
  header("location:../login.php?error=2");
}
$conn = new mysqli("localhost", "root", "", "Airlines");
$sql = "INSERT INTO Users (username, email, country, pass) VALUES ('$user', '$email', '$country', '$pass')";
if (mysqli_query($conn, $sql)) {
  session_start();
  $_SESSION["user"] = $user;
  // $_SESSION["log"] = true;
  header("location:../index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);