<?php
session_start();
include '../../php/dbh.php';

$email = $_POST['username'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM customer WHERE customer_email = '$email' AND customer_password = '$pwd' AND isAccepted ='T'";
$result = $conn->query($sql);

        if (!$row = $result->fetch_assoc()) {
	       $_SESSION['msg']="Your username or password is incorrect.";
            header("Location: ../index.php");
            exit();
         } else {
	       //$_SESSION['name'] = $row['first_name'] . ' ' . $row['last_name'];
	       echo 'Login Success';
	       //header('Location: #');
}

?>

