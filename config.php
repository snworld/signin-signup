<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "user-management-system";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

$base_url = "http://localhost/signin-signup/";

?>