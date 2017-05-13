<?php
session_start();
include '../../../php/dbh.php';

$service = $_GET['service'];

$sql1 = "SELECT service_name FROM services WHERE service_name = '$service'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0){
	$_SESSION['addservice'] = 'Service already exists';
} else {
	$sql2 = "INSERT INTO services (service_name) 
		VALUES ('$service')";
	$result2 = $conn->query($sql2);

	$_SESSION['addservice'] = 'New service has been added';
}


header('Location: ../services.php');
exit();
?>
