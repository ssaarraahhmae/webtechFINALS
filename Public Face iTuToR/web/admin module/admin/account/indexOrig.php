<?php
	session_start();
	if (!isset($_SESSION['name'])) {
		$_SESSION['msg']="You are not logged in";
     	header('Location: ../');
     	exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service Providers</title>
	<style type="text/css">
		table, th, td {
   			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h1><?php echo 'Welcome ' . $_SESSION['name']; ?></h1>
	<form action="php/logout.php"><button>Logout</button></form>
	<a href= "index.php">Service Provider</a>
	<a href="pending_sp.php">Pending SP</a>
	<a href= "customer.php">Customer</a>
	<a href= "payment.php">Payments</a>
	<a href= "services.php">Services</a>

	<table>
		<tr>
			<th>SPID</th>
			<th>Name</th>
			<th>Service Offered</th>
			<th>Specialization</th>
			<th>Email</th>
			<th>Status</th>
		</tr>
	</table>
	
</body>
</html>

