<?php
  include_once 'connect.php';
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
	<title>Tours</title>
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
          <li class="nav-item active"><a href="tours.php" class="nav-link">Tours</a></li>
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
    <h1 class="display-2">Tours</h1>

    </div>
</div>
<!--<div class="container">
	<form>
		<label>Email:</label>
		<input type="varchar" name="email" placeholder="Enter Email ID"><br><br>
		<label>Password:</label>
		<input type="password" name="psw" placeholder="Enter Password"><br><br>
		<input type="submit" value="Login">
	</form>
</div>-->
<br><br><br>

<!-- <div class="container">

<div class="row">

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6"
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/bg_1.jpg">
      <img src="images/bg_1.jpg"  width="30%" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/bg_1.jpg">
      <img src="images/bg_1.jpg"  width="30%" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/bg_1.jpg">
      <img src="images/bg_1.jpg"  width="30%" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
</div>

</div>
</div>

 -->


<br>
<section class="ftco-section bg-light">
</br>
<div class="container">
        <h3>DDVV special tour</h3>
        <p class="lead">Mumbai-Amritsar-Delhi-Kolkata-Sikkim</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <button> <a href="booking_default.php"> Click here to book!</a></button>
</div>
<br>
</section>
<br><br><br>
<section class="ftco-section bg-light">
  <br>
<div class="container">
        <h3>Customize your own tour</h3>
        <p class="lead">Curate your own dream tour!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <button> <a href="booking_custom.php"> Click here to book!</a></button>
</div>
<br>
</section>
<br><br><br>


<!--Trying to implement cards-->
<!-- <div class="container">
<div class="card" style="width:400px">
  <img class="card-img-top" src="images/bg_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary btn-center">See Profile</a>
  </div>
</div>
</div>

<br><br> -->

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