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
	<title>Amritsar</title>
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
  
  	<div class="jumbotron-amr jumbotron-fluid">
  <div class="container">
  	<br>
    <h1 class="display-2">Amritsar, Punjab</h1>

    </div>
</div>

<br><br><br>
<div class="container">
<div class="row mt-sm-4 mt-md-0">
    <div class="col-sm-12 col-md-8">
        <p>Inextricably linked with the history of Sikhism, Amritsar is amongst the most revered sites of the world. It was founded as recently as the 16th century. Its name is a derivative of the Amrit Sarovar (pool of nectar) amidst which stands the Golden Temple, the most sacred of Sikh shrines. Accounts suggest that Guru Amardas purchased the land from Emperor Akbar and decided to build a tank at the site. Following his death, it was completed by Guru Ramdas and also came to be known as Chak Ramdas or Guru ka Chak. Some of the oldest markets in Amritsar, notably Guru ka Bazaar, date back to his time.</p>
        <p>The construction of the Golden Temple was initiated by Guru Arjan Dev while Guru Hargobind, who accorded the religion a martial temper, built the Akal Takht in 1606. Amritsar has a rich history encompassing various mythical and historical narratives including the epic Ramayana. It is believed that the site called Ram Tirath was Maharish Valmiki’s ashram, where Sita reportedly gave birth to her twin sons, Luv and Kush.</p>
    </div>

    <div class="col-sm-12 col-md-4">
      <img src="images/amritsar/amr_2.jpg" style=" width: 95%">
    </div>
  </div>
</div>
<br>

<div class="container">
<div class="row mt-sm-4 mt-md-0">

    <div class="col-sm-12 col-md-4">
      <img src="images/amritsar/amr_3.jpg" style=" width: 95%">
    </div>
    <div class="col-sm-12 col-md-8">
        <p>The Gobindgarh Fort and Ram Bagh were built by Maharaja Ranjit Singh, the founder of the Sikh Empire. While the Jallianwala Bagh continues to be the most evocative monument to India’s freedom struggle. The Khalsa College, established by visionary leaders at the beginning of the 20th century turned Amritsar into a hub of education. Also a centre of thriving industry since its inception, Amritsar is famed for its textiles, particularly shawls, and for its carpets. Amritsar has gained tremendous popularity for its gourmet traditions; especially the dhabas (roadside eatery) that churn out, amongst an inexhaustible list of delicacies, irresistible kulchas, chola-bhaturas, tandoori chicken and fried fish.</p>
        <p>Amritsar has all the makings of a well-rounded tourist destination; its ancient legends, historical monuments, places of worship, old bazaars, theatre traditions and colourful festivals all serve as a window to its robust past. Excursions to the Harike Bird Sanctuary and visits to the India-Pakistan border at Wagah are an absolute delight, while breaking bread or celebrating Diwali with the denizens of this hospitable city is without parallel.</p>
    </div>


    
  </div>
</div>
<br><br>

<div class="container">
<h2>Hotels</h2>
<h5> Taj Swarna </h5>
<p>Taj Swarna, Amritsar embodies the best of Punjab’s iconic history, art and culture. Fusing modern design with traditional elegance, Taj Swarna, Amritsar is a stylish, contemporary world class hotel, basking in an enviable location that serves Amritsar and the adjoining cities of Jalandhar and Ludhiana. The hotel features spacious rooms, an array of dining options, sophisticated meeting facilities, Health Club, Jiva Spa and Salon and is close to the main shopping area of the city.</p>
        <p>Taj Swarna, Amritsar captures the spirit of the city in all its glory, embodying the history, art, culture and vibrancy of Punjab with contemporary flair. The hotel pays tribute to local arts and crafts while bringing forth a global perspective to its edifice and the experiences created within.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_6.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_7.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_8.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_9.jpg">
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
<h5> Hotel Ramada </h5>
<p>When the warmth and quality of Ramada Worldwide joins hand with Punjab’s renowned hospitality, you can be assured that your experience at Ramada Amritsar will be exceedingly special. Hotel is conveniently located in the walled city and in proximity to the Golden Temple. The Guru Ram Das International Airport is 12 Km and the Railway Station is at 1 .5 Km. Ramada Amritsar is a 4 Star hotel incorporating perfect fusion of traditional values with modern amenities, which has 145 guest rooms. These rooms are accompanied with cordial room facilities which comprise of 24-hour front desk, 24-hour in-room dining, 24- hour Wi-Fi connectivity service, complimentary mineral water, Tea- Coffee maker, bathroom amenities and daily newspaper.</p>
        <p>Ramada Amritsar has one Multi-Cuisine restaurant “AL Fresco” with a la carte preparations along with a Coffee Shop “Kaffee Avanti” with splendid variety of freshly baked cakes, exotic pastries and assortment of savories. With over 7,000 square feet of the banqueting space including indoor banquet comprising of two Banquets “Monte Carlo” & “Casa Blanca” of 1500 square feet each.</p>
</div>
<div class="hotels">
    <div class="container bg-light text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_10.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_11.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_12.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_13.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_14.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/amritsar/amr_15.jpg">
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
