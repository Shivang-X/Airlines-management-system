<?php

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['pass']) || $user==" ") {
    header("location:../login.php?error=2");
}else {
    $conn = new mysqli("localhost", "root", "", "Airlines");
    $sql = "SELECT pass from `users` WHERE `username` = '$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($pass == $row['pass']) {
        session_start();
        $_SESSION["user"] = $user;
        header("location:../index.php");
    } else {
        header("location:../login.php?error=1");
    }
}
mysqli_close($conn);
?>