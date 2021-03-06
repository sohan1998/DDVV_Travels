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
	<title>Book the DDVV Special Tour</title>
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
        <li class="nav-item dropdown active">
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
    <h1 class="display-3">DDVV Special Tour!</h1>
</div>
    
</div>
<div class="container">


<div class="row">
  <div class="column">
    <h2>Cities</h2>
    
      <p>City 1: Mumbai</p>
                

  </div>
  <div class="column">
    <h2>Hotels</h2>
    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      
                      <option value="" name="cost_eff">Cost Effective Option</option>
                      <option value="" name="lux_opt">Luxurious Option</option>
                      </select>
  </div>
  <div class="column">
    <h2>Price</h2>
    <!-- <input type="text" class="form-control" name="price" placeholder="insert price"> -->
  </div>
</div>

<div class="row">
  <div class="column">
    <p>City 2: Amritsar</p>
                

  </div>
  <div class="column">
    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      
                      <option value="">Cost Effective Option</option>
                      <option value="">Luxurious Option</option>
                      </select>
  </div>
  <div class="column">
    <input type="number" class="form-control" name="price" placeholder="insert price">
  </div>
</div>

<div class="row">
  <div class="column">
    <p>City 3: Delhi</p>
                

  </div>
  <div class="column">
    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      
                      <option value="">Cost Effective Option</option>
                      <option value="">Luxurious Option</option>
                      </select>
  </div>
  <div class="column">
    <input type="number" class="form-control" name="price" placeholder="insert price">
  </div>
</div>

<div class="row">
  <div class="column">
    <p>City 4: Kolkata</p>
          

  </div>
  <div class="column">
    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      
                      <option value="">Cost Effective Option</option>
                      <option value="">Luxurious Option</option>
                      </select>
  </div>
  <div class="column">
    <input type="number" class="form-control" name="price" placeholder="insert price">
  </div>
</div>

<div class="row">
  <div class="column">
    <p>City 5: Sikkim</p>
                    

  </div>
  <div class="column">
    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      
                      <option value="">Cost Effective Option</option>
                      <option value="">Luxurious Option</option>
                      </select>
  </div>
  <div class="column">
    <input type="number" class="form-control" name="price" placeholder="insert price">
  </div>
</div>

</div>
	<footer class="footer ftco-bg-dark ftco-section">
    
<section class=" ftco-section bg-dark ftco-light "> 
        
    <div class="footer-copyright text-center text_color-light py-4">
      <p class="text-light bg-dark">© 2016 Copyright:
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