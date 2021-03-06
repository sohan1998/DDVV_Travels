<?php
  include_once 'connect.php';
  session_start();
?>

<?php 

$temp=$_SESSION['c_id'];
$sql = "DELETE FROM customer_account WHERE Cust_ID='$temp'";
mysqli_query($conn,$sql);
header("Location: logout.php");




 ?>

