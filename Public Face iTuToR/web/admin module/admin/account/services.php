<?php
	session_start();
	include '../../php/dbh.php';
	$sql1 = "SELECT  * FROM service_categories";
	$service_categories1 = $conn->query($sql1);

	$sql2 = "SELECT  * FROM service_categories";
	$service_categories2 = $conn->query($sql2);

	$sql3 = "SELECT  * FROM services_offered";
	$services_offered = $conn->query($sql3);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customers</title>
	<style type="text/css">
		table, th, td {
   			border: 1px solid black;
		}
	</style>
</head>
<body>

	<h1>Add a category</h1>
	<form action="php/addcategory.php" method="GET">
		<label><b>Category Name</b></label>
		<input type="text" placeholder="Enter Category Name" name="category" required>
		<button type="submit">Add</button>
	</form>
	<?php
		if (isset($_SESSION['addcategory'])) {
			echo $_SESSION['addcategory'];
			unset($_SESSION['addcategory']);
		}
	?>

	<h1>Add a service</h1>
	<form action="php/addservice.php" method="GET">
		<label><b>Select Category</b></label>
		<select name="category">
			<?php
				if ($service_categories1->num_rows > 0){
					while($row = $service_categories1->fetch_assoc()) {
						echo "<option value=$row[category_id]>$row[category_name]</option>";
					}
				}
			?>
		</select>
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

	<h1>Delete a category</h1>
	<form action="php/deletecategory.php" method="GET">
		<label><b>Select category to delete</b></label>
		<select name="category">
			<?php
				if ($service_categories2->num_rows > 0){
					while($row = $service_categories2->fetch_assoc()) {
						echo "<option value=$row[category_id]>$row[category_name]</option>";
					}
				}
			?>
		</select>
		<button type="submit">Delete</button>
	</form>

	<?php
		if (isset($_SESSION['delcategory'])) {
			echo $_SESSION['delcategory'];
			unset($_SESSION['delcategory']);
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