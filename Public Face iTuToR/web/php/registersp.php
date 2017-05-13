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
$services = '';
if(!empty($_POST['service'])) {
    foreach($_POST['service'] as $temp) {
    	$services .= $temp;
    }
}

if (isset($_POST['specialization'])) {
	$specialization = $_POST['specialization'];
} else {
	$specialization = '';
}


$sql = "INSERT INTO registration (account_role, name, email, password, age, contact_number, gender, home_address, service, specialization, status) 
		VALUES ('Service Provider', '$name', '$email', '$password', '$age', '$contact', '$gender', 
		'$address', '$services', '$specialization', 'pending')";


if (!$result = $conn->query($sql)) {
	$_SESSION['msg'] = 'Please enter valid data';
	header('Location: ../assets/sp_register.php');
	exit();
}

echo "Registration sent. Please wait for confirmation.";

?>