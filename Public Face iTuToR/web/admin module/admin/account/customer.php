<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT customer_id, customer_name, requested_service, request_status FROM customer NATURAL JOIN request";
	$result = $conn->query($sql);
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customers</title>
	<style type="text/css">
		table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    border: none;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
	</style>
</head>
<body>
        <div style="overflow-x:auto;">
	<table>
		<tr>
			<th>Cut ID</th>
			<th>Name</th>
			<th>Course Enrolled</th>
			<th>Status</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
				echo '<tr>';
					echo "<td>$row[customer_id]</td>";
					echo "<td>$row[customer_name]</td>";
					echo "<td>$row[requested_service]</td>";
					echo "<td>$row[requested_status]</td>";
				echo '</tr>';	
				}
			}
		?>
	</table>
            <br>
    </div>
</body>
</html>