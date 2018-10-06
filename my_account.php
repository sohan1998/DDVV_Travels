<?php
  include_once 'connect.php'
?>


<?php

//Fetch User submitted information
$email1 = $_POST["email_login"];
// $psw = md5($_POST["psw_login"]);


$id = $_GET["id"];
$query1 = "SELECT * FROM customer_account WHERE Email_ID = '" . $id . "'";
//$result4 = $conn->query($query1);
$result4=mysqli_query($conn,$query1);
//$row = $result4->fetch_assoc();
$row=mysqli_fetch_assoc($result4);
$name = $row["Name"];
$cust_id = $row["Cust_ID"];
$email = $row["Email_ID"]
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
      <a class="navbar-brand" href="index.html">DDVV Tours and Travels</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="destinations.html" class="nav-link">Destinations</a></li>
          <li class="nav-item"><a href="tours.html" class="nav-link">Tours</a></li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
            My Account
        </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="login.html">Login</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="sign_up.html">Sign Up</a>
    </div>
</li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
            Book Tours
        </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="booking_default.html">DDVV Special Tour</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="sign_up.html">Customize Your Dream Tour</a>
    </div>
</li>
          <li class="nav-item"><a href="about_us.html" class="nav-link">About Us</a></li>
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
      <img src="images/sample.jpg" class="img-circle" style="border-radius: 50%" width="150px">
      <h3>Name: <?php echo $name; ?></h3>
      <h3>User ID: <?php echo $cust_id; ?></h3>
      <h3>Email ID: <?php echo $email; ?></h3>
            </div>

    <div class="col-sm-12 col-md-4">
        <h3 class="mb-4">Settings</h3>

        <ul class="nav flex-column nav-pills">
            <li class="nav-item">
                <a class="nav-link" name="edit_account" href="edit.html">Edit User Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" name="previous_account" href="about_us.html">View Previous Tours</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" name="signout_account" href="#">Sign Out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" name="follow_account" href="#">Follow us on Facebook!</a>
            </li>
        </ul>
    </div>
</div>

   
</div>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <section class="ftco-section bg-dark ftco-light "> 
    <div class="footer-copyright text-center text_color-light py-4">
      <p class="text-light bg-dark"><!-- <h5 class="ftco-heading-5 ftco-heading-light"> -->© 2016 Copyright:
      <a href="index.html"> DDVVToursAndTravels.com</a></p>
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