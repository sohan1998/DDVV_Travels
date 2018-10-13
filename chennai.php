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
	<title>Chennai</title>
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
  
  	<div class="jumbotron-che jumbotron-fluid">
  <div class="container">
  	<br>
    <h1 class="display-2">Chennai, Tamil Nadu</h1>

    </div>
</div>

<br><br><br>
<div class="container">
<div class="row mt-sm-4 mt-md-0">
    <div class="col-sm-12 col-md-8">
        <p>Chennai or Madras as it was called before, on the Coromandel Coast, is the capital city of Tamil Nadu, a State of the Indian Sub continent. It is a major industrial, commercial, cultural, economic and educational centre of the Southern India. The Chennai District’s population is 46,81,087 [2011 census]. Chennai City is the sixth largest populated in Indian cities. It is known as the "Detroit of India" because many automobile industries are located here.</p>
        <p>There are many versions and legends as to how this city’s name kept changing from Madras and Chennai from time to time. Originally this city was called as Madras, from Madraspattinam during Nayakars rule. It was a fishing village situated to the north of the present Fort St. George.</p>
    </div>

    <div class="col-sm-12 col-md-4">
      <img src="images/chennai/che_2.jpg" style=" width: 95%">
    </div>
  </div>
</div>
<br>

<div class="container">
<div class="row mt-sm-4 mt-md-0">

    <div class="col-sm-12 col-md-4">
      <img src="images/chennai/che_3.jpg" style=" width: 95%">
    </div>
    <div class="col-sm-12 col-md-8">
        <p>British bought the piece of land from the King of Vijayanagar and built the Fort St. George that houses today’s Secretariat complex of Government of Tamil Nadu. British retained the name as Madrasapattinam, though the locals called it as Chennapattinam. A Legend also says, this city was first named Chennai in honour of Damal Chennappa Nayakkar.</p>
        <p>Beautiful Beaches, One day leisure outlets, Modern Sea Port and Airport, Long and beautiful Highways, Convenient multi-Transport system, Theme parks, Industrial cities, Hi –Tech software silicon valley parks, Sophisticated Multi Speciality Hospitals, World Class Universities, High Rise Business and Residential complexes are the present days outlook of the great Chennai, most sought after by the people of all walks of life from all parts of the world.</p>
    </div>


    
  </div>
</div>
<br><br>

<div class="container">
<h2>Hotels</h2>
<h5> ITC Grand Chola </h5>
<p>This ornate, palatial tribute to Southern India's greatest empires – The Imperial Cholas – overlooks verdant foliage in the heart of Chennai. It embodies the highest standards in Indian hospitality balanced with elegant restraint in a prime property with distinct personality.</p>
        <p>ITC Grand Chola has 522 rooms along with 78 luxuriously appointed service apartments- collectively its 600 spacious guest rooms, suites and luxury service apartments, are the epitome of Indian grace and style, expertly delegated with thoughtful amenities. ITC Grand Chola outshines the needs of both the business traveller as well as the bespoke requirements of the destination connoisseur.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_6.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_7.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_9.jpg">
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

<div class="container">
<h5> The Raintree Hotel </h5>
<p>At The Raintree Hotels, we understand the essence of personalized service, that helps us take care of you in all ways possible. We believe in finding the right balance between luxury, style, comfort, service and your happiness. Because for us, everything matters.</p>
        <p>Enjoy smartly designed rooms and suites or host an event in flexible meeting and event spaces, get energized in our fitness center or lounge by the rooftop pool. The hotels offer multiple dining options from traditional to international cuisines and everything else that helps us make sure that you are well taken care off.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_14.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_15.jpg">
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
