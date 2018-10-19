<?php
	include 'connect.php';
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
				
		</script>
	<title>Customize Your Dream Tour</title>
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
				<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown">
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
				<h1 class="display-3">Customize Your Dream Tour!</h1>
			</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<!--<pre style="font-size: 50px"><b>Cities</b></pre>-->
			<?php
				if(isset($_POST['submit'])){
				//to run PHP script on submit
					if(!empty($_POST['check_list'])){
					echo "<table class='table table-hover' style='font-size: 20px; margin:auto;'><thead class='bg-secondary text-white'><tr><th>City</th><th>Luxury</th><th>Budget</th></tr></thead><tbody>";

					// Loop to store and display values of individual checked checkbox.
						foreach($_POST['check_list'] as $selected){
							//Fetch User submitted information
							$place_name = mysqli_real_escape_string($conn, $selected);
							// $psw = mysqli_real_escape_string($conn,md5($_POST["psw_login"]));

							// $email = $_POST["email_login"];
							// $psw = md5($_POST["psw_login"]);

							$_SESSION[$place_name] = $place_name;

							$query1 = "SELECT Hotel_LUX, Hotel_CFO FROM place WHERE Name = '$place_name'";

							$result = mysqli_query($conn, $query1);
							$resultCheck = mysqli_num_rows($result);
							if ($resultCheck > 0) {
								$row = mysqli_fetch_assoc($result);
								echo "<tr>"."<td>".$place_name."</td>"."<td>".$row['Hotel_LUX']."</td>"."<td>".$row['Hotel_CFO']."</td>"."</tr>";
								//echo $row['Hotel_LUX'] . '&nbsp;&nbsp;&nbsp;&nbsp;' . $row['Hotel_CFO'] . "<hr>";
							}

						}
						$query2 = "SELECT SUM(Price) AS Total_LUX FROM hotel WHERE Place IN ('" . implode("', '", $_POST['check_list']) . "') AND Type = 'LUX'";

						$result2 = mysqli_query($conn, $query2);
						$total_lux = mysqli_fetch_assoc($result2)['Total_LUX'];

						$query3 = "SELECT SUM(Price) AS Total_CFO FROM hotel WHERE Place IN ('" . implode("', '", $_POST['check_list']) . "') AND Type = 'CFO'";

						$result3 = mysqli_query($conn, $query3);
						$total_cfo = mysqli_fetch_assoc($result3)['Total_CFO'];

							echo "<tr class='bg-light'>"."<td>"."TOTAL"."</td>"."<td>".$total_lux."</td>"."<td>".$total_cfo."</td>"."</tr>";
						echo "</tbody></table>";

						$_SESSION['total_cfo']=$total_cfo;
						$_SESSION['total_lux']=$total_lux;
					}
				}
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
		<!-- <br><br><br> -->
		<!-- <form>
					<div class="icon"><span class="ion-ios-arrow-down"></span></div>
					<input type="checkbox" name="mum"><font style="font-size: 25px"> Mumbai</font><br><br>
					<input type="checkbox" name="ban"><font style="font-size: 25px"> Bangalore</font><br><br>
					<input type="checkbox" name="del"><font style="font-size: 25px"> Delhi</font><br><br>
					<input type="checkbox" name="gan"><font style="font-size: 25px"> Gangtok</font><br><br>
					<input type="checkbox" name="sri"><font style="font-size: 25px"> Srinagar</font><br><br>
					<input type="checkbox" name="pan"><font style="font-size: 25px"> Panaji</font><br><br>
					<input type="checkbox" name="amr"><font style="font-size: 25px"> Amritsar</font><br><br>
					<input type="checkbox" name="kol"><font style="font-size: 25px"> Kolkata</font><br><br>
					<input type="checkbox" name="che"><font style="font-size: 25px"> Chennai</font><br><br>
		</form> -->
	</div>

	<!-- <div class="col-md-6">
		<pre style="font-size: 50px"><b>    Hotels</b></pre>
		<form>
				<input type="radio" name="mum" value="mum1"><font style="font-size: 25px"> Taj Mahal Palace</font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="mum" value="mum0"><font style="font-size: 25px"> The Resort</font>
			<br><br>
				<input type="radio" name="ban" value="ban1"><font style="font-size: 25px"> The Leela Palace</font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="ban" value="ban0"><font style="font-size: 25px"> Tulip Inn</font>
			<br><br>
				<input type="radio" name="del" value="del1"><font style="font-size: 25px"> The Lodhi</font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="del" value="del0"><font style="font-size: 25px"> Uppal International</font>
				<br><br>
				<input type="radio" name="gan" value="gan1"><font style="font-size: 25px"> Mayfair Spa Resort</font>
				&nbsp;
				<input type="radio" name="gan" value="gan0"><font style="font-size: 25px"> Hotel Lemon Tree</font><br><br>
		</form> -->
		<!-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> -->
		<!-- <div class="column" style="font-size: 20px">Luxurious Option</div>
		<div class="column" style="font-size: 20px">Cost-effective Option</div> -->

	</div>

 <!--  <div class="column" id="prices">
		<h2>Price</h2>
		<input type="number" class="form-control" name="price" placeholder="">
	</div>
</div>
 -->
</div>


</div>
</body>
</html>