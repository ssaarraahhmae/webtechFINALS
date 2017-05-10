<?php
session_start();
include 'dbh.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM service_providers WHERE email = '$email' AND pwd = '$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	echo 'Your username or password is incorrect.';
} else {
	$_SESSION['id'] = $row['id'];
	header('Location: #');
}

?>