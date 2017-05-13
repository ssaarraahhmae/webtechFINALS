<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']); 
		}
	?>
	<form action="../php/registerc.php" method="POST">
		<label><b>Name</b></label>
		<input type="text" placeholder="Enter Name" name="name" required><br>
		<label><b>Email</b></label>
		<input type="text" placeholder="Enter Name" name="email" required><br>
		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" pattern=".{3,}" title="Minimum of six characters" name="password" required><br>
		<label><b>Age</b></label>
		<input type="text" placeholder="Enter Age" name="age" required><br>
		<label><b>Contact Number</b></label>
		<input type="text" placeholder="Enter Contact Number" name="contact" required><br>
		<label><b>Gender</b></label>
		<select name="gender">
  			<option value="M">Male</option>
  			<option value="F">Female</option>
		</select><br>
		<label><b>Home Address</b></label>
		<input type="text" placeholder="Enter Home Address" name="address" required><br>
		<button type="submit">Register</button>
	</form>

</body>
</html>