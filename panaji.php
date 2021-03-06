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
	<title>Panaji</title>
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
<br><br>
  
  	<div class="jumbotron-pan jumbotron-fluid">
  <div class="container">
  	<br>
    <h1 class="display-2">Panaji, Goa</h1>

    </div>
</div>

<br><br><br>
<div class="container">
<div class="row mt-sm-4 mt-md-0">
    <div class="col-sm-12 col-md-8">
        <p>It is Called Panjim by the Portuguese, Panaji, which means "the land that does not flood" is the state capital of Goa. Unlike many capital cities, Panaji has a distinct unhurried character.</p>
        <p>It is situated on the southern banks of the Mandovi River, which makes this town all the more charming.</p>
    </div>

    <div class="col-sm-12 col-md-4">
      <img src="images/panaji/pan_2.jpg" style=" width: 95%">
    </div>
  </div>
</div>
<br>

<div class="container">
<div class="row mt-sm-4 mt-md-0">

    <div class="col-sm-12 col-md-4">
      <img src="images/panaji/pan_3.jpg" style=" width: 95%">
    </div>
    <div class="col-sm-12 col-md-8">
        <p>The area around Panjim attracts far fewer visitors than the coastal resorts, yet its paddy fields and wooded valley harbour several attractions worth a day or two's break from the beach. It is famous for its enormous churches and beaches.</p>
        <p>Renowned for its beaches, places of worship and world heritage architecture, Goa is visited by large numbers of international and domestic tourists each year. It also has rich flora and fauna, owing to its location on the Western Ghats range, which is classified as a biodiversity hotspot.</p>
    </div>


    
  </div>
</div>
<br><br>

<div class="container">
<h2>Hotels</h2>
<h5> Goa Mariott Resort and Spa </h5>
<p>Edging the waters of the Arabian Sea, Goa Marriott Resort & Spa is an upscale hotel with resort services and award-winning hospitality. Surround yourself with spacious luxury in well-appointed rooms and suites, featuring deluxe amenities and sweeping views of the sparkling bay. Take a few short steps to the beach or Casino Carnival, North Goa's exhilarating gaming and entertainment destination.</p>
        <p>Host successful business functions in 14,000 square feet of flexible event space with custom catering and state-of-the-art audiovisual technology. After a full day of work or exploration, savor the many flavors of India and the world at our stylish restaurants, or rejuvenate your mind and body at our upscale spa. Designed to provide an unrivaled guest experience, our hotel is a luxurious, 5-star sanctuary where you can work, dine and unwind.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_6.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_7.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_9.jpg">
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
<h5> Varanda do mar </h5>
<p>Your search for the perfect getaway begins and ends here. Varanda do Mar is a premier 4-star hotel in Panjim. This contemporary boutique property provides well-appointed rooms and lavish suites with modern amenities in Miramar.</p>
        <p>It is conveniently located and offers all comforts needed to create a memorable vacation.
Bring your significant other, your family or friends, or just bring yourself.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_14.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_15.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel2" role="button" data-slide="next">
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
