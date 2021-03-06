<?php
	include 'connect.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="styles.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
				
		</script>
	<title>Customize Your Dream Tour</title>
</head>
<body>
	<div class="fixed-top">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">DDVV Tours and Travels</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="destinations.php" class="nav-link">Destinations</a></li>
					<li class="nav-item"><a href="tours.php" class="nav-link">Tours</a></li>
					<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
						Account
				</a>
				<?php 
					if (isset($_SESSION['c_id'])) {
						echo '<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="my_account.php">Account info</a>
					</div>';
					}
					else{
						echo '<div class="dropdown-menu">
				<a class="dropdown-item" href="login.html">Login</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="sign_up.html">Sign Up</a>
		</div>';
					}
			?>
</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown">
						Book Tours
				</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="booking_default.php">DDVV Special Tour</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="booking_custom.php">Customize Your Dream Tour</a>
		</div>
</li>
					<li class="nav-item"><a href="about_us.php" class="nav-link">About Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
	
<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-3">Here's your bill:</h1>
			</div>
</div>