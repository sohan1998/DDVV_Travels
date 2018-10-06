<?php

$servername = "localhost";
$username = "root";
$password = "";


//Fetch User submitted information
$dbname = "ddvv_travels";

//Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully <br>";

?>