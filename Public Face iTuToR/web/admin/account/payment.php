<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT * FROM requests WHERE status = 'Done'";
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
			<th>SP ID</th>
			<th>Cust ID</th>
			<th>Date Start</th>
			<th>Date End</th>
			<th>Service</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					echo '<tr>';
						echo "<td></td>";
						echo "<td>$row[id_customer]</td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td></td>";
					echo '</tr>';
				}
			}
		?>
	</table>
    </div>
	
</body>
</html>