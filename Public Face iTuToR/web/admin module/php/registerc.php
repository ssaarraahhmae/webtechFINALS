<?php
session_start();
include 'dbh.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO registration (account_role, name, email, password, age, contact_number, gender, home_address, service, specialization, status) 
		VALUES ('Customer', '$name', '$email', '$password', '$age', '$contact', '$gender', '$address', NULL, NULL, 'registered')";

if (!$result = $conn->query($sql)) {
	$_SESSION['msg'] = 'Please enter valid data';
	header('Location: ../assets/customer_register.php');
	exit();
}

echo "You are now registered.";

?>