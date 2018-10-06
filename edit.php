<?php
	include_once 'connect.php'
?>


<?php 	

$name = mysqli_real_escape_string($conn,$_POST["name_edit"];
// $lastname = $_POST["lastname_signup"];
$contact1 = mysqli_real_escape_string($conn,$_POST["contact1_edit"];
$contact2 = mysqli_real_escape_string($conn,$_POST["contact2_edit"];
$dob = mysqli_real_escape_string($conn,$_POST["dob_edit"];
$email = mysqli_real_escape_string($conn,$_POST["email_edit"];
$psw = mysqli_real_escape_string($conn,md5($_POST["psw_edit"]);


//$sql = "INSERT INTO customer_account(Name, DOB, Email_ID, Password) VALUES ('$name', '$dob', '$email', '" . $psw . "')";
$sql = "UPDATE customer_account SET Name='$name', DOB='$dob', Email_ID='$email', Password='$psw' WHERE Email_ID='$email'";

if ($conn->query($sql) === TRUE) 
{
	//echo "<br>New record created successfully<br>";
	header("my_account.html");
}
else
{
 	echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

//echo "<script> location.href = 'my_account.php?id=".$email."' </script>";

 ?>