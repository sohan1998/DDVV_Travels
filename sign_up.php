<?php
	include_once 'connect.php';
?>




<?php

//Fetch User submitted information

$name = $_POST["name_signup"];
// $lastname = $_POST["lastname_signup"];
$contact1 = $_POST["contact1_signup"];
$contact2 = $_POST["contact2_signup"];
$dob = $_POST["dob_signup"];
$email = $_POST["email_signup"];
$psw = md5($_POST["psw_signup"]);

// $pass = md5($psw);

$sql = "INSERT INTO customer_account(Name, DOB, Email_ID, Password) VALUES ('$name', '$dob', '$email', '" . $psw . "')";

if ($conn->query($sql) === TRUE) 
{
// 	echo "<br>New record created successfully<br>";
header("my_account.html");
}
else
{
 	echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

echo "<script> location.href = 'my_account.php?id=".$email."' </script>";


$conn->close();
?>

