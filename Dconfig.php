<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boat_safari_management_system";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}

?>