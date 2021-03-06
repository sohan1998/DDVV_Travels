<?php
	include_once 'connect.php'
?>




<?php

session_start();
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

if (empty($name) || empty($contact1) || empty($dob) || empty($email) || empty(psw)) {
	header("Location: sign_up.html?signup=empty");
	exit();
}
else {
	if (!preg_match("/^[a-zA-Z]*$/", $name)) { 	
		header("Location: sign_up.html?signup=invalidname");
		exit();
	}
	else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			header("Location: sign_up.html?signup=invalidemail");
			exit();
		}
		else{
			$sql2="SELECT * FROM customer_account WHERE Email_ID='$email'";
			$result=mysqli_query($conn,$sql2);
			$result_check=mysqli_num_rows($result);
			if ($result_check>0) {
				header("Location: sign_up.html?signup=user_registered_already");
				exit();
			}
			else{
				$sql = "INSERT INTO customer_account(Name, DOB, Email_ID, Password) VALUES ('$name', '$dob', '$email', '$psw')";
				mysqli_query($conn,$sql);
				$query3="SELECT * FROM customer_account WHERE Email_ID = '$email' AND Password = '$psw' ";
				$result2=mysqli_query($conn,$query3);
				$resultCheck = mysqli_num_rows($result2);
				if ($resultCheck>0) {
					$row=mysqli_fetch_assoc($result2);
					$_SESSION['name']=$row['Name'];
					$_SESSION['email']=$row['Email_ID'];
					$_SESSION['pwd']=$row['Password'];
					$_SESSION['dob']=$row['DOB'];
					$_SESSION['c_id']=$row['Cust_ID'];
					$_SESSION['prev_tours']=$row['previous_tours'];
				}
				header("Location: my_account.php");
				}
			}
		}
	}



//$sql = "INSERT INTO customer_account(Name, DOB, Email_ID, Password) VALUES ('$name', '$dob', '$email', '$psw')";
//mysqli_query($conn,$sql);


// if ($conn->query($sql) === TRUE) 
// {
// // 	echo "<br>New record created successfully<br>";
// //header("my_account.html");
// }
// else
// {
//  	echo "<br>Error: " . $sql . "<br>" . $conn->error;
// }

//echo "<script> location.href = 'my_account.php?id=".$email."' </script>";
//header("Location: my_account.php?id=$email");

//$conn->close();
mysqli_close($conn);
?>

