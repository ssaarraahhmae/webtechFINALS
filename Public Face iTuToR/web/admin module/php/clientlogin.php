<?php
session_start();
include 'dbh.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM clients WHERE email = '$email' AND pwd = '$pwd' AND stat='registered'";
$result = $conn->query($sql);

        if (!$row = $result->fetch_assoc()) {
	       $_SESSION['msg']="User does not exist";
            header("Location: ../index.php");
            exit();
         } else {
	       $_SESSION['name'] = $row['first_name'] . ' ' . $row['last_name'];
	       echo 'Welcome ' . $_SESSION['name'];
	       //header('Location: #');
}

?>

