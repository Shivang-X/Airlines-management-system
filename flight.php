<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Search Flights</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- add style css -->
	<link rel="stylesheet" href="./Styles/flight.css">
</head>

<body>
<?php
session_start();
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
}
?>

	<?php
	$conn = new mysqli("localhost", "root", "", "Airlines");
	$sql = "SELECT * from `flights`";
	$result = mysqli_query($conn, $sql);
	?>
	<div class="sticky-section">
			<nav>

				<?php if(isset($user)) print '<a href="./logout.php">LOGOUT</a>' ?>
				<a href="./searchflights.php">SEARCH FLIGHTS</a>
				<a href="./addflights.php">ADD-FLIGHTS</a>
				<a href="./flight.php">FLIGHTS</a>
				<?php if(!isset($user)) print '<a href="./signup.php">SIGNUP</a>' ?>
				<?php if(!isset($user)) print '<a href="./login.php">LOGIN</a>' ?>

			</nav>
		</div>
	<div class="container page-container">
		<div class="row gutters">
			<?php
			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">';
				echo '<figure class="user-card green">';
				echo '<figcaption>';

				echo "<h5>Departing</h5>";
				echo "<h6>".$row['Departure']."</h6>";
				echo "<h5>Arriving</h5>";
				echo "<h6>".$row['Arrival']."</h6>";
				echo "<p>Date: ".$row['Departing']."</p>";
				echo "<h6>Class: ".$row['Class']."</h6>";
				echo "<h6> Price: $".$row['Price']."</h6>";
				echo '<div class="button">';
				echo '    <a href="./updateflight.php?id='.$row['ID'].'" name="button" type="button" style="width:100px; background-color: rgb(132, 183, 212); border-radius: 30px;">UPDATE</a>  ';
				echo '    <a href="./deleteflight.php?id='.$row['ID'].'" name="button" type="button" style="width:100px; background-color:rgb(132, 183, 212); border-radius: 30px">DELETE</a>';


				echo "	</div>";
				echo "	</figcaption>";
				echo "</figure>";
				echo "</div>";
			}
			?>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">

	</script>
</body>

</html>