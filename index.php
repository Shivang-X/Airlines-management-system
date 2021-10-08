<?php
session_start();
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
}
?>

<!doctype html>
<html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="./Styles/index.css" rel="stylesheet">

	<title>HOME PAGE</title>

</head>

<body>
	<div class="container">
		<!-- <?php
				(isset($user)) ? (print "<h1>Welcome $user</h1>") : (print "<h1>Welcome Guest</h1>");
				?> -->

		<div class="sticky-section">
			<nav>

				<?php if(isset($user)) print '<a href="./logout.php">LOGOUT</a>' ?>
				<a href="./searchflights.php">SEARCH FLIGHTS</a>
				<a href="./addflights.php">ADD-FLIGHTS</a>
				<a href="./flight.php">FLIGHTS</a>
				<?php if(!isset($user)) print '<a href="./signup.php">SIGNUP</a>' ?>
				<?php if(!isset($user)) print '<a href="./login.php">LOGIN</a>' ?>

			</nav>

			<?php
			(isset($user)) ? (print "<h1 style='margin: 10px 10px'>Welcome $user</h1>") : (print "<h1 style='margin: 10px 10px'>Welcome Guest</h1>");
			?>
		</div>



		<img src="./Images/vecteezy_airplane_1208405.png" class="airplane">
	</div>
</body>

</html>