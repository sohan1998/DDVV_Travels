<?php
  include_once 'connect.php';
  session_start();
?>


<?php

//Fetch User submitted information
//$email1 = $_POST["email_login"];
// $psw = md5($_POST["psw_login"]);


// $id = $_GET["id"];
// $query1 = "SELECT * FROM customer_account WHERE Email_ID = '" . $id . "'";
// //$result4 = $conn->query($query1);
// $result4=mysqli_query($conn,$query1);
// //$row = $result4->fetch_assoc();
// $row=mysqli_fetch_assoc($result4);
// $name = $row["Name"];
// $cust_id = $row["Cust_ID"];
// $email = $row["Email_ID"]

$email=$_SESSION['email']; 
$name=$_SESSION['name'];
$cust_id=$_SESSION['c_id'];
$prev_tours=$_SESSION['prev_tours'];


// $message = "Username and/or Password incorrect.\\nTry again.";
// echo "<script type='text/javascript'>alert('$message');</script>";

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
  <title>My Account</title>
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
		<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown">
			Account
		</a>
		<?php 
		  if (isset($_SESSION['c_id'])) {
			echo '<div class="dropdown-menu">
		  <a class="dropdown-item" href="logout.php">Logout</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="edit_temp.php">Edit account info</a>
		  </div>'
		  ;
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
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
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
	<h1 class="display-3">Welcome to DDVV Tours and Travels!</h1>
</div>
	
</div>

<div class="container">
  <div class="row mt-sm-4 mt-md-0">
	<div class="col-sm-12 col-md-8">
	  <!-- <img src="images/sample.jpg" class="img-circle" style="border-radius: 50%" width="150px"> -->
	  <br><h3>Name: <?php echo $name; ?></h3>
	  <h3>User ID: <?php echo $cust_id; ?></h3>
	  <h3>Email ID: <?php echo $email; ?></h3>
	  <h3>No. of Previous Tours: <?php echo $prev_tours; ?> </h3>
	</div>

	<div class="col-sm-12 col-md-4">
		<h3 class="mb-4">Settings</h3>

		<ul class="nav flex-column nav-pills">
			<li class="nav-item">
				<a class="nav-link" name="edit_account" href="edit_temp.php">Edit User Info</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" name="previous_account" href="about_us.php">View Previous Tours</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" name="signout_account" href="logout.php">Sign Out</a>
			</li>
			 <li class="nav-item">
				<a class="nav-link" name="delete_account" href="delete.php">Delete account</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" name="follow_account" href="https://www.facebook.com/DDVV-Travels-1911381365838357/" target="_blank">Follow us on Facebook!</a><br><br>
			</li>
		</ul>
	</div>
</div>

   
</div>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
	<section class="ftco-section bg-dark ftco-light "> 
	<div class="footer-copyright text-center text_color-light py-4">
	  <p class="text-light bg-dark"><!-- <h5 class="ftco-heading-5 ftco-heading-light"> -->© 2016 Copyright:
	  <a href="index.php"> DDVVToursAndTravels.com</a></p>
	</div>
	<!-- Copyright -->
</section>
  </footer>
  <!-- Footer -->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>