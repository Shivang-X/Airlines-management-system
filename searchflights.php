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
    <form method="post" action="./actions/searchflights.php">
        <div class="sec-1">
            <div class="radio-btn">
                <input type="radio" class="btn" name="check" checked="checked"><span>Roundtrip</span>
                <input type="radio" class="btn" name="check"><span>One Way</span>
                <input type="radio" class="btn" name="check"><span>Multy-City</span>
            </div>


            <div class="grp-1">
                <label>Flying From</label>
                <input type="text" class="form-control border-bottom" placeholder="City or Airport" name="Departure">
                <!-- <select class="custom-select">
                    <option value="1">Nadiad </option value="1">
                    <option value="1">Bharuch </option value="1">
                    <option value="1">Anand </option value="1">
                    <option value="1">Vadodara </option value="1">
                    <option value="2">Uganda </option value="1">
                </select> -->
                <label>Flying To</label>
                <input type="text" class="form-control border-bottom" placeholder="City or Airport" name="Arrival">

                <div class="grp-2">
                    <label>Travel Class</label>
                    <select class="custom-select" name="class">
                        <option value="Economy Class" name="class">Economy Class </option>
                        <option value="Bussiness Class" name="class">Bussiness Class </option>
                    </select>
                </div>
                <div class="grp-2">
                    <button type="submit" class="btn btn-primary flights">Search Flight</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>