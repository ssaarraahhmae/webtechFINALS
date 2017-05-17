<?php

include '../../../php/dbh.php';

$id = $_GET['deny'];

$sql2 = "DELETE FROM customer WHERE customer_id = $id";
$result2 = $conn->query($sql2);

header ("Location: ../pending_customer.php");

?>