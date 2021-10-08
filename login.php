<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="./Styles/login.css">
  <title>Hello</title>
</head>

<body>
<?php
session_start();
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
}
?>

  <?php
  if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger" role="alert">
      Invalid Username / Password
    </div>
  <?php
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
  <form method="post" action="./actions/login.php">
    <section id="sec-1">

      <div class="grp-1">
        <h2 class="text-center">Login</h2>
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
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" placeholder="******" name="pass">
            </div>


            <button type="submit" class="btn btn-primary">Login</button>
            <div class="sec-2">
              <p>Don't have an account? <a href="./signup.php">Register Here</a></p>
            </div>
          </form>
        </div>
      </div>
      </div>
    </section>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>