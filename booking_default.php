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
    <h1 class="display-3">DDVV Special Tour!</h1>
</div>    
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--<pre style="font-size: 50px"><b>Cities</b></pre>-->
      <?php
          echo "<table class='table table-hover' style='font-size: 20px; margin:auto;'><thead class='bg-secondary text-white'><tr><th>City</th><th>Luxury</th><th>Budget</th></tr></thead><tbody>";

          $cl=array("Mumbai","Delhi","Chennai","Kolkata","Bangalore");


          // Loop to store and display values of individual checked checkbox.
            foreach($cl as $place_name){
              // $psw = mysqli_real_escape_string($conn,md5($_POST["psw_login"]));

              // $email = $_POST["email_login"];
              // $psw = md5($_POST["psw_login"]);

              $_SESSION[$place_name]=$place_name;
              

              $query1 = "SELECT Hotel_LUX, Hotel_CFO FROM place WHERE Name = '$place_name'";

              $result = mysqli_query($conn, $query1);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<tr>"."<td>".$place_name."</td>"."<td>".$row['Hotel_LUX']."</td>"."<td>".$row['Hotel_CFO']."</td>"."</tr>";
                //echo $row['Hotel_LUX'] . '&nbsp;&nbsp;&nbsp;&nbsp;' . $row['Hotel_CFO'] . "<hr>";
              }

            }
            $query2 = "SELECT SUM(Price) AS Total_LUX FROM hotel WHERE Place IN ('" . implode("', '", $cl) . "') AND Type = 'LUX'";

            $result2 = mysqli_query($conn, $query2);
            $total_lux = mysqli_fetch_assoc($result2)['Total_LUX'];

            $query3 = "SELECT SUM(Price) AS Total_CFO FROM hotel WHERE Place IN ('" . implode("', '", $cl) . "') AND Type = 'CFO'";

            $result3 = mysqli_query($conn, $query3);
            $total_cfo = mysqli_fetch_assoc($result3)['Total_CFO'];

              echo "<tr class='bg-light'>"."<td>"."TOTAL"."</td>"."<td>".$total_lux."</td>"."<td>".$total_cfo."</td>"."</tr>";
            echo "</tbody></table>";

            $_SESSION['total_cfo']=$total_cfo;
            $_SESSION['total_lux']=$total_lux;
            $_SESSION['ddvv_disc']=10;
      ?>

      <form action="booking_confirmation.php" class="mt-3" style="max-width: 400px; margin: auto;">
        <div class="form-group">
          <label for="package">Select Package:</label>
          <select class="form-control" id="package" name="package">
            <option value="LUX">Luxurious</option>
            <option value="CFO">Budget</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block"/>
        </div>
      </form>
