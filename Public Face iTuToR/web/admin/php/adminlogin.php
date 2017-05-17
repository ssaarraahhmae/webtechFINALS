<?php
session_start();
include '../../php/dbh.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM service_provider WHERE sp_email = '$email' AND sp_password = '$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	 $_SESSION['msg']="User does not exist";
     header("Location: ../index.php");
     exit();
} else {
	$_SESSION['name'] = $row['sp_name'];
	header('Location: ../account');
	exit;
}

?>
