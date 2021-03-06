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
	<title>Mumbai</title>
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
  
  	<div class="jumbotron-mum jumbotron-fluid">
  <div class="container">
  	<br>
    <h1 class="display-2">Mumbai, Maharashtra</h1>

    </div>
</div>

<br><br><br>
<div class="container">
<div class="row mt-sm-4 mt-md-0">
    <div class="col-sm-12 col-md-8">
        <h4>Explore the city that never sleeps and is always abuzz with activity!</h4>
        <p>Mumbai is in all ways a mega-city driven by power, wealth, glamour and fame which attracts people to give shape to their dreams and aspirations. But it is also a city with strong historical links, wonderful British architecture, museums, beaches, places of worship, and above all, a true galaxy of stars where Bollywood reigns supreme.</p>
        <p>A city of diverse cultures and a melting pot of commerce, industry, entertainment, enterprise, and politics, Mumbai’s trysts with wealth and fame have, however, been recent. It wasn’t a cosmopolitan finance centre to begin with. Its history has witnessed several shifts in power, and the seven islands changed hands frequently.</p>
    </div>

    <div class="col-sm-12 col-md-4">
      <img src="images/mumbai/mum_2.jpg" style=" width: 95%">
    </div>
  </div>
</div>
<br>

<div class="container">
<div class="row mt-sm-4 mt-md-0">

    <div class="col-sm-12 col-md-4">
      <img src="images/mumbai/mum_3.jpg" style=" width: 95%">
    </div>
    <div class="col-sm-12 col-md-8">
        <p>The seven islands that came to constitute Mumbai were earlier home to communities of fishing colonies. For centuries, the islands were under the control of successive indigenous empires before being ceded to the Portuguese and subsequently to the British East India Company.</p>
        <p>During the mid-18th century, Bombay was reshaped by the Hornby Vellard Project, which undertook reclamation of the area between the seven islands from the sea. Along with construction of major roads and railways, the reclamation project, completed in 1845, transformed Bombay into a major seaport on the Arabian Sea.</p>
    </div>


    
  </div>
</div>
<br><br>

<div class="container">
<h2>Hotels</h2>
<h5> Taj Mahal Palace </h5>
<p>The Taj Mahal Palace Hotel is a heritage five-star luxury saracenic revival architecture hotel in the Colaba region of Mumbai, Maharashtra, India, situated next to the Gateway of India. Historically it was known as the "Taj Mahal Hotel" or the "Taj Palace Hotel" or simply "the Taj".</p>
        <p>Part of the Taj Hotels Resorts and Palaces, this hotel is considered the flagship property of the group and contains 560 rooms and 44 suites. There are some 1,600 staff including 35 butlers. From a historical and architectural point of view, the two buildings that make up the hotel, the Taj Mahal Palace, and the Tower are two distinct buildings, built at different times and in different architectural designs. In 2017, the Taj Mahal Palace Hotel has acquired an image trademark. It is the first building in the country to get intellectual property rights protection for its architectural design.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_6.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_7.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_9.jpg">
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
<p>The Resort, located on the shoreline of the Arabian Sea is a beach facing hotel offering modern rooms with free Wi-Fi. It is 1 km from INS Hamla Naval Base. The air-conditioned rooms feature garden, pool or sea views. Each is equipped with a cable TV, wardrobe and desk. Private bathroom includes free toiletries and a shower. Relax by the outdoor pool or enjoy a work-out at the fitness center. The hotel has a 24hours reception and a travel desk.</p>
        <p>The Resort provides a number of facilities and amenities to make your stay comfortable. Some of the facilities and services you can avail include room service, baby sitting, spa, restaurant, bar, health club, business center, conference halls, internet connectivity, airport transfers, swimming pool, gymnasium, parking and many more.
Rooms amenities offered – Tea/coffee supplies, Business stationery, toiletries, Electronic safe.
Amenities on request – Slipper, dental kit, shaving kit, comb</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_14.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_15.jpg">
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
