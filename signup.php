<!DOCTYPE html>
<html>

<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./Styles/signup.css">
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

				<?php if(isset($user)) print '<a href="./logout.php">LOGOUT</a>' ?>
				<a href="./searchflights.php">SEARCH FLIGHTS</a>
				<a href="./addflights.php">ADD-FLIGHTS</a>
				<a href="./flight.php">FLIGHTS</a>
				<?php if(!isset($user)) print '<a href="./signup.php">SIGNUP</a>' ?>
				<?php if(!isset($user)) print '<a href="./login.php">LOGIN</a>' ?>

			</nav>
		</div>
  <form method="POST" action="./actions/signup.php">
    <section id="sec-1">
      <div class="grp-1">
        <h2 class="text-center">Registration</h2>
        <div class="container">
          <form>
            <div class="form-group">
              <label for="user">User Name:</label>
              <input type="text" class="form-control" placeholder="User Name" name="username">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Email Address" name="email">
            </div>
            <div class="form-group">
              <label for="email">Country</label>
              <input type="text" class="form-control" placeholder="Ex: India" name="country">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>
            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Registration</button>
          </form>
        </div>
      </div>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </form>
</body>

</html>