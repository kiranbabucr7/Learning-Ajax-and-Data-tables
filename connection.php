<?php
/**
 * Connection file for the databse connection
 */
$servername = "localhost";
$username = "root";
$password = "";
$db = "ajx";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
?>