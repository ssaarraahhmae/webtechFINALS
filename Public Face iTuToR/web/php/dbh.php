<?php

$conn = mysqli_connect("localhost", "root", "", "webtek");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>