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
$description = $_POST['description'];

//echo $gender;

$sql = "INSERT INTO service_provider (sp_name, sp_email, sp_password, sp_desc, sp_age, sp_contactno, sp_gender, sp_homeaddress) 
		VALUES ('$name', '$email', '$password', '$description',$age , '$contact', '$gender', '$address')";

$sql1 = "SELECT sp_id FROM service_provider WHERE sp_email = '$email' AND sp_password = '$password'";

if ($result = $conn->query($sql)) {
	$result1 = $conn->query($sql1);
	$row = $result1->fetch_assoc();
	$_SESSION['sp_id'] = $row['sp_id'];
	header('Location: ../choose_category.php');
} else {
	echo "There was an error. Pls try again later.";
	echo "<br><a href='../../../'> Back to HOME </a>";
}

?>