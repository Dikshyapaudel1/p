<?php
// Database configuration
$host = "localhost";        // Server host
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "shopping"; // Your database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);


if(!$conn){
    echo"unsucessful".mysqli_connect_error();
}




?>