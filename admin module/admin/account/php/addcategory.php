<?php
session_start();
include '../../../php/dbh.php';

$category = $_GET['category'];

$sql1 = "SELECT category_name FROM service_categories WHERE category_name = '$category'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0){
	$_SESSION['addcategory'] = 'Category already exists';
} else {
	$sql2 = "INSERT INTO service_categories (category_name) 
		VALUES ('$category')";
	$result2 = $conn->query($sql2);

$_SESSION['addcategory'] = 'New category has been added';
}

header('Location: ../services.php');
exit();
?>