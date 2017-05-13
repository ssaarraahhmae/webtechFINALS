<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT service_name FROM services";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
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
			<th>Service</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					echo '<tr>';
						echo "<td>$row[service_name]</td>";
					echo '</tr>';
				}
			}
		?>
    </table>
    </div>
</body>
</html>

