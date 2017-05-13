<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT * FROM requests WHERE isAcceptedRequest = 'T' AND status != 'Done'";
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
			<th>Cust ID</th>
			<th>Name</th>
			<th>Course Enrolled</th>
			<th>Status</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
				echo '<tr>';
					echo "<td>$row[id_customer]</td>";
					$sql1 = "SELECT customer_name FROM customer WHERE customer_id = $row[id_customer]";
					$result1 = $conn->query($sql1);
					while($row1 = $result1->fetch_assoc()) {
						echo "<td>$row1[customer_name]</td>";
					}
					$sql2 = "SELECT id_service FROM provider_specialization WHERE specialization_id = $row[id_specialization]";
					$result2 = $conn->query($sql2);
					while($row2 = $result2->fetch_assoc()) {
						$sql3 = "SELECT service_name FROM services WHERE service_id = $row2[id_service]";
						$result3 = $conn->query($sql3);
						while($row3 = $result3->fetch_assoc()) {
							echo "<td>$row3[service_name]</td>";
						}	
					}
					echo "<td>$row[status]</td>";
				echo '</tr>';	
				}
			}
		?>
	</table>
            <br>
    </div>
</body>
</html>