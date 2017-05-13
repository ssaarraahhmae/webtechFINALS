<?php
session_start();
include '../../php/dbh.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	 $_SESSION['msg']="User does not exist";
     header("Location: ../index.php");
     exit();
} else {
	$_SESSION['name'] = $row['name'];
	header('Location: ../account');
	exit;
}

?>
