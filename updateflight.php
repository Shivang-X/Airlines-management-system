<html>

<head>
    <title>Flight Booking</title>
    <link rel="stylesheet" href="./Styles/addflights.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    ?>
    <?php
    $id = $_GET['id'];
    $conn = new mysqli("localhost", "root", "", "Airlines");
    $sql = "SELECT * FROM flights WHERE ID='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="sticky-section">
        <nav>

            <?php if (isset($user)) print '<a href="./logout.php">LOGOUT</a>' ?>
            <a href="./searchflights.php">SEARCH FLIGHTS</a>
            <a href="./addflights.php">ADD-FLIGHTS</a>
            <a href="./flight.php">FLIGHTS</a>
            <?php if (!isset($user)) print '<a href="./signup.php">SIGNUP</a>' ?>
            <?php if (!isset($user)) print '<a href="./login.php">LOGIN</a>' ?>

        </nav>
    </div>
    <form method="post" action="./actions/updateflights.php?id=<?php echo $id ?>">
        <div class="sec-1">
            <div class="radio-btn">
                <input type="radio" class="btn" name="check" checked="checked"><span>Roundtrip</span>
                <input type="radio" class="btn" name="check"><span>One Way</span>
                <input type="radio" class="btn" name="check"><span>Multy-City</span>
            </div>


            <div class="grp-1">
                <label>Flying From</label>
                <input type="text" class="form-control border-bottom" placeholder="City or Airport" name="Departure" value=<?php echo $row['Departure'] ?>>
                <label>Flying To</label>
                <input type="text" class="form-control border-bottom" placeholder="City or Airport" name="Arrival" value=<?php echo $row['Arrival'] ?>>

                <div class="grp-2">
                    <label>Departing</label>
                    <input type="date" class="form-control select-date" name="departing" value=<?php echo $row['Departing'] ?>>
                </div>

                <div class="grp-2">
                    <label>Travel Class</label>
                    <select class="custom-select" name="class" value=<?php echo $row['Class'] ?>>
                        <option value="Economy Class" name="class">Economy Class </option>
                        <option value="Bussiness Class" name="class">Bussiness Class </option>
                    </select>
                </div>

                <label>Price</label>
                <input type="text" class="form-control border-bottom" placeholder="Price" name="price" value=<?php echo $row['Price'] ?>>
                <div class="grp-2">
                    <button type="submit" class="btn btn-primary flights">UPDATE Flight</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>