<?php
	session_start();
	include '../../php/dbh.php';

	$sql3 = "SELECT  * FROM services";
	$services_offered = $conn->query($sql3);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add/Delete Services</title>
	<style type="text/css">
		table, th, td {
   			border: 1px solid black;
		}
	</style>
</head>
<body>

	<h1>Add a service</h1>
	<form action="php/addservice.php" method="GET">
		<br><label><b>Service Name</b></label>
		<input type="text" placeholder="Enter Service Name" name="service" required>
		<button type="submit">Add</button>
	</form>

	<?php
		if (isset($_SESSION['addservice'])) {
			echo $_SESSION['addservice'];
			unset($_SESSION['addservice']);
		}
	?>

	<h1>Delete a service</h1>
	<form action="php/deleteservice.php" method="GET">
		<label><b>Select service to delete</b></label>
		<select name="service">
			<?php
				if ($services_offered->num_rows > 0){
					while($row = $services_offered->fetch_assoc()) {
						echo "<option value=$row[service_id]>$row[service_name]</option>";
					}
				}
			?>
		</select>
		<button type="submit">Delete</button>
	</form>

	<?php
		if (isset($_SESSION['delservice'])) {
			echo $_SESSION['delservice'];
			unset($_SESSION['delservice']);
		}
	?>

</body>
</html>