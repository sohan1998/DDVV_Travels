<?php
  include_once 'connect.php';
  session_start();
?>

<!doctype html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Home</title>
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
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
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
    <h1 class="display-2">Wander. Explore. Experience.</h1>
   <!--  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nav-itemsi ut aliquip ex ea commodo consequat. </p> -->
    <div class="block-17 my-4">
    <!--           <form action="" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                    <input type="text" class="form-control" placeholder="Ex: Italy,USA,Russia">
                  </div>
                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      
                      <option value="">Destinations</option>
                      <option value="">Tours</option>
                      <option value="">Hotels</option>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">  
              </form> -->
            </div>
    </div>
</div> 
<br><br><br>
<div class="destinations">
    <div class="container text-center my-3">
    <h2>Destinations</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">

                <div class="carousel-item active">
                    <img class="d-block col-4 img-fluid" src="images/bg_1.jpg" usemap="#workmap">
                        <map name="workmap">
                          <area shape="rect" coords="34,44,270,340" href="login.html">
                          </map>
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/mumbai/mum_4.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/bangalore/ban_3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/chennai/che_3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/panaji/pan_2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-4 img-fluid" src="images/srinagar/sri_4.jpg">
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
   <div class="container">
<div class="row mt-sm-4 mt-md-0">
    <div class="col-sm-12 col-md-8">
        <h3>About Us</h3>
        <p class="lead">A trusted name since 2021</p>

        <p>We here at DDVV Travels welcome you!</p>
        <p>Booking a travel package when it comes to travelling to new parts of the country is a practice that has slowly gained a lot of popularity. Today, whenever it is about planning a holiday trip, many people have a preferred travel portal in India that is best for their specific needs. Owing to the faith bestowed in our travel services by our patrons, DDVV Travels has established its niche and is counted among the top 10 travel agencies in India.</p>
    </div>

    <div class="col-sm-12 col-md-4">
        <h3 class="mb-4">Customer Support</h3>

        <ul class="nav flex-column nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="about_us.php">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about_us.php">Booking Tips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/explore/tags/ddvv/" target="_blank">Check us out on Instagram</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="https://www.facebook.com/DDVV-Travels-1911381365838357/" target="_blank">Follow us on Facebook!</a>
            </li>
        </ul>
    </div>
</div>
</div>
<br><br><br>



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