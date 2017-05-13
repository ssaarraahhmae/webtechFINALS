<?php

$conn = mysqli_connect("localhost", "root", "", "itutor");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>