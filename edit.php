<?php
	include_once 'connect.php'
?>


<?php 	

$name = $_POST["name_edit"];
// $lastname = $_POST["lastname_signup"];
$contact1 = $_POST["contact1_edit"];
$contact2 = $_POST["contact2_edit"];
$dob = $_POST["dob_edit"];
$email = $_POST["email_edit"];
$psw = md5($_POST["psw_edit"]);


$sql = "INSERT INTO customer_account(Name, DOB, Email_ID, Password) VALUES ('$name', '$dob', '$email', '" . $psw . "')";
//$sql = "UPDATE customer_account SET Name='$name', DOB='$dob', Email_ID='$email', Password='$psw'";

if ($conn->query($sql) === TRUE) 
{
	//echo "<br>New record created successfully<br>";
	header("my_account.html");
}
else
{
 	echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

echo "<script> location.href = 'my_account.php?id=".$email."' </script>";

 ?>