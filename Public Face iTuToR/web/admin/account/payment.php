<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT * FROM requests";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service Render</title>
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
			<th>Service Provider</th>
			<th>Customer</th>
			<th>Time</th>
			<th>Days</th>
			<th>Service</th>
			<th>Status</th>
			<th>Payment</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					echo '<tr>';
						$sql1 = "SELECT sp_name FROM service_provider WHERE sp_id = $row[service_id]";
						if (!$result1 = $conn->query($sql1)) {
							while($row1 = $result1->fetch_assoc()) {
								echo "<td>$row1[sp_name]</td>";
							}
						} else {
							echo "<td>None Yet</td>";
						}
						$sql2 = "SELECT customer_name FROM customer WHERE customer_id = $row[customer_id]";
						$result2 = $conn->query($sql2);
						while($row2 = $result2->fetch_assoc()) {
							echo "<td>$row2[customer_name]</td>";
						}
						echo "<td>$row[scheduled_time]</td>";
						echo "<td>$row[scheduled_day]</td>";
						$sql3 = "SELECT service_name FROM services WHERE service_id = $row[service_id]";
						$result3 = $conn->query($sql3);
						while($row3 = $result3->fetch_assoc()) {
							echo "<td>$row3[service_name]</td>";
						}
						echo "<td>$row[status]</td>";
						if ($row['isPaid'] == 'T') {
							echo "<td>Paid</td>";
						} else {
							echo "<td>Not Paid</td>";
						}	
					echo '</tr>';
				}
			}
		?>
	</table>
    </div>
	
</body>
</html>