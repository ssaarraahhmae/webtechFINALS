<?php

include '../../../php/dbh.php';

$id = $_GET['accept'];

$sql1 = "SELECT * FROM registration WHERE account_id = $id";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

$sql2 = "UPDATE registration SET status='registered' WHERE account_id = $id";
$result2 = $conn->query($sql2);

$sql3 = "INSERT INTO service_provider (sp_name, age, home_address, email_address, specialization, account_id) 
		VALUES ($row1[name], $row1[age], $row1[home_address], $row1[email], $row1[specialization], $row1[account_id])";
$result3 = $conn->query($sql3);

header ("Location: ../pending_sp.php");

?>