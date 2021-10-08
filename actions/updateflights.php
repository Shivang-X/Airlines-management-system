<?php

    $Departure = $_POST['Departure'];
    $Arrival = $_POST['Arrival'];
    $departing = $_POST['departing'];
    $class = $_POST['class'];
    $price = $_POST['price'];
    $id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "Airlines");
    $sql = "UPDATE flights SET Departure='$Departure', Arrival='$Arrival', departing='$departing', Class='$class', Price='$price' WHERE ID='$id'";
    if (mysqli_query($conn, $sql)) {
        header("location:../flight.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    mysqli_close($conn);
?>