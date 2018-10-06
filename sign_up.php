<?php
	include_once 'connect.php'
?>




<?php

//Fetch User submitted information

// $name = $_POST["name_signup"];
// // $lastname = $_POST["lastname_signup"];
// $contact1 = $_POST["contact1_signup"];
// $contact2 = $_POST["contact2_signup"];
// $dob = $_POST["dob_signup"];
// $email = $_POST["email_signup"];
// $psw = md5($_POST["psw_signup"]);



$name = mysqli_real_escape_string($conn,$_POST["name_signup"]);
// $lastname = $_POST["lastname_signup"];
$contact1 = mysqli_real_escape_string($conn,$_POST["contact1_signup"]);
$contact2 = mysqli_real_escape_string($conn,$_POST["contact2_signup"]);
$dob = mysqli_real_escape_string($conn,$_POST["dob_signup"]);
$email = mysqli_real_escape_string($conn,$_POST["email_signup"]);
$psw = mysqli_real_escape_string($conn,md5($_POST["psw_signup"]));

$sql = "INSERT INTO customer_account(Name, DOB, Email_ID, Password) VALUES ('$name', '$dob', '$email', '$psw')";
mysqli_query($conn,$sql);


// if ($conn->query($sql) === TRUE) 
// {
// // 	echo "<br>New record created successfully<br>";
// //header("my_account.html");
// }
// else
// {
//  	echo "<br>Error: " . $sql . "<br>" . $conn->error;
// }

echo "<script> location.href = 'my_account.php?id=".$email."' </script>";
//header("Location: my_account.php?id='$email'");

//$conn->close();
mysqli_close($conn);
?>

