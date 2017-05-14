<?php

include '../../../php/dbh.php';

$id = $_GET['accept'];

$sql1 = "SELECT * FROM customer WHERE customer_id = $id";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

$sql2 = "UPDATE customer SET isAccepted='T' WHERE customer_id = $id";
$result2 = $conn->query($sql2);

header ("Location: ../pending_customer.php");

?>