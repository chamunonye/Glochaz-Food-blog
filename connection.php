<?php
$servername = "localhost";
$dbname='glochaz';
$username = "root";
$password = "";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
 die("Connection failed: " . $mysqli->connect_error);
}
// echo "success";
?>