<?php
    $Departure = $_POST['Departure'];
    $Arrival = $_POST['Arrival'];
    $departing = $_POST['departing'];
    $class = $_POST['class'];
    $price = $_POST['price'];

    $conn = new mysqli("localhost", "root", "", "Airlines");
    $sql = "INSERT INTO flights (Departure, Arrival, departing, class, price) VALUES ('$Departure', '$Arrival', '$departing', '$class', '$price')";
    if (mysqli_query($conn, $sql)) {
        header("location:../index.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      mysqli_close($conn);
      ?>
