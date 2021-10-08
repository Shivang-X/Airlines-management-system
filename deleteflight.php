<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $id = $_GET['id'];
    $conn = new mysqli("localhost", "root", "", "Airlines");
    $sql = "DELETE FROM flights WHERE ID = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("location:./flight.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>

</html>