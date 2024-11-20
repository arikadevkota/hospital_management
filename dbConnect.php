<?php
include('dbconnect.php'); 
// Database connection settings
$hostname = "localhost"; // Usually localhost
$username = "root";      // Database username
$password = "";          // Database password (leave empty if there's none)
$database = "myhmsdb";   // Database name

// Create a connection
$con = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$test_query = "SELECT * FROM doctb LIMIT 1"; // Adjust this to a table that exists in your database
if ($result = mysqli_query($con, $test_query)) {
    echo "Connection successful and query executed!";
    mysqli_free_result($result);
} else {
    echo "Query failed: " . mysqli_error($con);
}
?>
