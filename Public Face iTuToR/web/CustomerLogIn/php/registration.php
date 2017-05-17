<?php

session_start();
include '../../php/dbh.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['psw'];
$contact = $_POST['cpNumber'];
$gender = $_POST['gender'];
$address = $_POST['addrss'];


$sql = "INSERT INTO customer (customer_name, customer_email, customer_password, customer_contactno, customer_gender, customer_homeaddress, isAccepted) 
		VALUES ('$name', '$email', '$password', '$contact', '$gender', '$address', 'F')";


if ($result = $conn->query($sql)) {
	echo "Your now registered.";
	echo "<br><a href='../../'> Back to HOME </a>";
} else {
	echo "There was an error. Pls try again later.";
	echo "<br><a href='../../'> Back to HOME </a>";
}

?>