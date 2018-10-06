<?php
	include_once 'connect.php';
?>



<?php 
//Fetch User submitted information
$email = $_POST["email_login"];
$psw = md5($_POST["psw_login"]);

$query3 = "SELECT * FROM customer_account WHERE Email_ID = '$email' AND Password = '$psw' ";


 $result3 = $conn->query($query3);

if ($result3->num_rows == 1) 
{
    // output data of each row
	// while($row = $result3->fetch_assoc()) 
 //    {
 //        echo $row["Password"] . "<br>";
 //    }
	// echo "SUCCESS";
	echo "<script> location.href = 'my_account.php?id=" . $email . "' </script>";
} 
else 
{
    echo "No results";
} 






$conn->close();

?>
