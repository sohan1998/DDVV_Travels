<?php
	include_once 'connect.php';
	session_start();
?>


<?php 

$name = mysqli_real_escape_string($conn,$_POST["name_edit"]);
// $lastname = $_POST["lastname_signup"];
//$contact1 = mysqli_real_escape_string($conn,$_POST["contact1_edit"];
//$contact2 = mysqli_real_escape_string($conn,$_POST["contact2_edit"];
//$dob = mysqli_real_escape_string($conn,$_POST["dob_edit"];
$email = mysqli_real_escape_string($conn,$_POST["email_edit"]);
//$psw = mysqli_real_escape_string($conn,md5($_POST["psw_edit"]);

//$sql = "INSERT INTO customer_account(Name, DOB, Email_ID, Password) VALUES ('$name', '$dob', '$email', '" . $psw . "')";

if(!empty($name)){
	if (!preg_match("/^[a-zA-Z]*$/", $name)) { 	
		header("Location: edit_temp.php?error=invalidname");
		exit();
	}
	else{
			$temp=$_SESSION['name'];
			$sql = "UPDATE customer_account SET Name='$name' WHERE Name='$temp'";
			mysqli_query($conn,$sql);
			$_SESSION['name']=$name;
	}
}	
if(!empty($email)){
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			header("Location: edit_temp.php?error=invalidemail");
			exit();
	}
	else{
			$temp2=$_SESSION['email'];
			$sql = "UPDATE customer_account SET Email_ID='$email' WHERE Email_ID='$temp2'";
			mysqli_query($conn,$sql);
			$_SESSION['email']=$email;
	}
}	

header("Location: my_account.php");

// if ($conn->query($sql) === TRUE) 
// {
// 	//echo "<br>New record created successfully<br>";
// 	header("my_account.php");
// }
// else
// {
//  	echo "<br>Error: " . $sql . "<br>" . $conn->error;
// }





//echo "<script> location.href = 'my_account.php?id=".$email."' </script>";

 ?>