<?php
session_start();
include '../../../php/dbh.php';

$category = $_GET['category'];

$sql1 = "DELETE FROM service_categories 
		WHERE category_id = $category";
$result1 = $conn->query($sql1);

$sql2 = "DELETE FROM services_offered 
		WHERE category_id = $category";
$result2 = $conn->query($sql2);

$_SESSION['delcategory'] = 'Category and all services under it has been deleted';
header('Location: ../services.php');
exit();
?>