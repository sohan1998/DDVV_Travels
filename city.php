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
    <h1 class="display-2">Mumbai</h1>

    </div>
</div>

<div class="container">
<div class="row mt-sm-4 mt-md-0">
    <div class="col-sm-12 col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>

    <div class="col-sm-12 col-md-4">
      <img src="images/bg_1.jpg" style=" width: 95%">
    </div>
  </div>
</div>
<br>

<div class="container">
<div class="row mt-sm-4 mt-md-0">

    <div class="col-sm-12 col-md-4">
      <img src="images/bg_1.jpg" style=" width: 95%">
    </div>
    <div class="col-sm-12 col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>


    
  </div>
</div>
<br><br>

<div class="container">
<h2>Hotels</h2>
<h5> Taj Mahal Palace </h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
</div>
<div class="hotels">
    <div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="container">
<h5> The Resort </h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
</div>
<div class="hotels">
    <div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</div>

<br><br><br>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <section class="ftco-section bg-dark ftco-light "> 
    <div class="footer-copyright text-center text_color-light py-4">
      <p class="text-light bg-dark"><!-- <h5 class="ftco-heading-5 ftco-heading-light"> -->© 2021 Copyright:
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
    <script>
        $('#recipeCarousel').carousel({
  interval: 10000
})
        $('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>
</body>
</html>
