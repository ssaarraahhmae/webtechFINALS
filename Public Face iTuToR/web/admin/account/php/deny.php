<?php

include '../../../php/dbh.php';

$id = $_GET['deny'];

$sql = "DELETE FROM registration WHERE account_id=$id";

$result = $conn->query($sql);

header ("Location: ../pending_sp.php");

?>