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
	<title>Destinations</title>
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
          <li class="nav-item active"><a href="destinations.php" class="nav-link">Destinations</a></li>
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
    <h1 class="display-2">Destinations</h1>

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


<div class="container">
<div class="row">
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="mumbai.php">
                <img src="images/mumbai/mum_2.jpg" class="img-responsive" width="95%" height="300">
                <div class="desc">
                  <h5 class="text-dark bg-white text-center">Mumbai</h5>
                </div>
              </a>
            </div>

            <div class="image2 col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="bangalore.php">
                <img src="images/bangalore/ban_2.jpg" class="img-responsive" width="95%" height="300">
                <div class="desc">
                  <h5 class="text-dark bg-white text-center">Bangalore</h5>
                </div>
              </a>
            </div>

            <div class="image3 col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="delhi.php">
                <img src="images/delhi/del_2.jpg" class="img-responsive" width="95%" height="300">
                <div class="description">
                  <h5 class="text-dark bg-white text-center">Delhi</h5>
                </div>
              </a>
                
            </div>
</div>
<br><br>

<div class="container">
<div class="row">
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="gangtok.php">
                <img src="images/gangtok/gan_3.jpg" class="img-responsive" width="95%" height="300">
                <div class="desc">
                  <h5 class="text-dark bg-white text-center">Gangtok</h5>
                </div>
              </a>
            </div>

            <div class="image2 col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="srinagar.php">
                <img src="images/srinagar/sri_3.jpg" class="img-responsive" width="95%" height="300">
                <div class="desc">
                  <h5 class="text-dark bg-white text-center">Srinagar</h5>
                </div>
              </a>
            </div>

            <div class="image3 col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="panaji.php">
                <img src="images/panaji/pan_3.jpg" class="img-responsive" width="95%" height="300">
                <div class="description">
                  <h5 class="text-dark bg-white text-center">Panaji</h5>
                </div>
              </a>
                
            </div>
</div>
<br><br>
<div class="row">
            <div class="image4 col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="amritsar.php">
                <img src="images/amritsar/amr_3.jpg" class="img-responsive" width="95%" height="300">
                <div class="description">
                  <h5 class="text-dark bg-white text-center">Amritsar</h5>
                </div>
              </a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="kolkata.php">
                <img src="images/kolkata/kol_3.jpg" class="img-responsive" width="95%" height="300">
                <div class="description">
                  <h5 class="text-dark bg-white text-center">Kolkata</h5>
                </div>
              </a>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
              <a target="_blank" href="chennai.php">
                <img src="images/chennai/che_2.jpg" class="img-responsive" width="95%" height="300">
                <div class="description">
                  <h5 class="text-dark bg-white text-center">Chennai</h5>
                </div>
              </a>
            </div>
</div>
</div> 

            
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

	<footer class="footer ftco-bg-dark ftco-section">
    
<section class=" ftco-section bg-dark ftco-light "> 
        
    <div class="footer-copyright text-center text_color-light py-4">
      <p class="text-light bg-dark">© 2021 Copyright:
      <a href="index.php"> DDVVToursAndTravels.com</a></p>
    </div>
    

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