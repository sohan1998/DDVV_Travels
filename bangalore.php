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
	<title>Bangalore</title>
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
  
  	<div class="jumbotron-ban jumbotron-fluid">
  <div class="container">
  	<br>
    <h1 class="display-2">Bangalore, Karnataka</h1>

    </div>
</div>

<br><br><br>
<div class="container">
<div class="row mt-sm-4 mt-md-0">
    <div class="col-sm-12 col-md-8">
        <p>Bangalore city is rightly called as the Garden City with a wide array of parks and garden which are spread all over the city increasing the beauty of the city. Not just this, the city has been adorned with many interesting yet suitable names. Pub City, Shopper's Hot Spot, Silicon Valley, Shopper's Paradise, Pub Hopper's Paradise, Gourmet's Delight, Air-conditioned City, etc are a few other names of which Bangalore Tourism has been awarded with.</p>
        <p>A tour to the city of Bangalore will show you the relevance of each of its name! Bangalore city tour from Bangalore Tourism, a division of Holidays DNA presents you with a wide range of entertaining choices which range from lively nightlife to fun filled amusement parks to beautiful lakes to glittery buildings to captivating monuments and temples.</p>
    </div>

    <div class="col-sm-12 col-md-4">
      <img src="images/bangalore/ban_2.jpg" style=" width: 95%">
    </div>
  </div>
</div>
<br>

<div class="container">
<div class="row mt-sm-4 mt-md-0">

    <div class="col-sm-12 col-md-4">
      <img src="images/bangalore/ban_3.jpg" style=" width: 95%">
    </div>
    <div class="col-sm-12 col-md-8">
        <p>There are many interesting tourism attractions in Bangalore which are worth visiting. Some of these are beautiful botanical garden of Lal Bagh, Cubbon Park, Lumbini Gardens, historically significant places like Bangalore Palace, Tipu Sultan's Palace, Vidhan Soudha, religious places like Venkataramana Swamy Temple, ISKCON Temple, Gavi Gangadeshwara Cave Temple, Dodda Ganapathi Temple, Maha Bodhi Society Temple, natural beauties like Thippagondanahalli Reservoir, Bannerghatta National Park along with other popular tourist spots such as Visvesvaraya Industrial and Technological Museum, Venkatappa Art Gallery and Government, JawaharLal Nehru Planetarium, Seshadari Iyer Memorial, Bangalore Aquarium, Wonder La amusement park, etc.</p>
    </div>


    
  </div>
</div>
<br><br>

<div class="container">
<h2>Hotels</h2>
<h5> The Leela Palace </h5>
<p>The foundation stone for The Leela Palace Bangalore was laid in 1997 by the then Prime Minister of India, Mr. H.D. Deve Gowda and the then Chief Minister of Karnataka, Mr. J.H. Patel. Drawing inspiration from the architectural style of the Royal Palace of Mysore, The Leela Palace Bengaluru stands majestically amidst the seven acres of lush gardens and a sparkling lagoon in the garden city.</p>
        <p>The Leela Palace Bengaluru has garnered innumerable awards and accolades since its opening in 2001 and till date remains the only destination hotel in Bengaluru. The hotel has 357 luxurious guestrooms, multiple dining options and extensive banqueting and conferencing venues. The Collonade provides a world-class shopping experience and the luxuriously designed spa and a state-of-the-art fitness centre makes the hotel the first choice for business and leisure travellers.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_6.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_7.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_9.jpg">
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
<h5> Tulip Inn </h5>
<p>Located 900 m from Bangalore Palace in Bangalore, Hotel Tulip Inn Bangalore features an accommodation, a restaurant and free WiFi. Free private parking is available on site. Some rooms include views of the garden or city. Each room includes a private bathroom equipped with a bath or shower. For your comfort, you will find free toiletries and a hair dryer</p>
        <p>There is a 24-hour front desk at the property. The hotel also offers car hire. Indira Gandhi Musical Fountain Park is 1.7 km from Tulip Inn Bangalore, while Indian Institute of Science, Bangalore is 2.7 km from the property. The nearest airport is Kempegowda International Airport, 33 km from the property. This property is also rated for the best value in Bangalore!</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_14.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_15.jpg">
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
