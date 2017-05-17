<?php

include '../../../php/dbh.php';

$id = $_GET['deny'];

$sql = "SELECT * FROM provider_specialization WHERE id_sp = $id";
$result = $conn->query($sql);

while ($row1 = $result->fetch_assoc()) {
	$sql3 = "DELETE FROM requests WHERE id_specialization = $row1[specialization_id]";
	$result3 = $conn->query($sql3);
}

$sql1 = "DELETE FROM provider_specialization WHERE id_sp = $id";
$result1 = $conn->query($sql1);

$sql2 = "DELETE FROM service_provider WHERE sp_id = $id";
$result2 = $conn->query($sql2);

header ("Location: ../pending_sp.php");

?>