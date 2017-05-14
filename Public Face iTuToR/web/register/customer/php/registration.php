<?php

session_start();
include '../../../php/dbh.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = (int)$_POST['age'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$address = $_POST['address'];


$sql = "INSERT INTO customer (customer_name, customer_email, customer_password, customer_age, customer_contactno, customer_gender, customer_homeaddress) 
		VALUES ('$name', '$email', '$password',$age , '$contact', '$gender', '$address')";

$sql1 = "SELECT sp_id FROM service_provider WHERE sp_email = '$email' AND sp_password = '$password'";

if ($result = $conn->query($sql)) {
	echo "Your now registered.";
	echo "<br><a href='../../../'> Back to HOME </a>";
} else {
	echo "There was an error. Pls try again later.";
	echo "<br><a href='../../../'> Back to HOME </a>";
}

?>