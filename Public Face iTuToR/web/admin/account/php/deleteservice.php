<?php
session_start();
include '../../../php/dbh.php';

$service = $_GET['service'];

$sql = "DELETE FROM services
		WHERE service_id = $service";
$result = $conn->query($sql);

$_SESSION['delservice'] = 'Service has been deleted';
header('Location: ../services.php');
exit();
?>