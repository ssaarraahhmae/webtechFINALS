<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT sp_id, sp_name FROM service_provider WHERE isAcceptedSP = 'T' AND sp_desc != 'Administrator'";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Service Providers</title>
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
			<th>Name</th>
			<th>Service Offered</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					echo '<tr>';
						echo "<td>$row[sp_name]</td>";
						$sql1 = "SELECT id_service FROM provider_specialization WHERE id_sp = $row[sp_id]";
						$result1 = $conn->query($sql1);
						echo "<td><ul>";
						while($row1 = $result1->fetch_assoc()) {
							$sql2 = "SELECT service_name FROM services WHERE service_id = $row1[id_service]";
							$result2 = $conn->query($sql2);
							while($row2 = $result2->fetch_assoc()) {
								echo "<li>$row2[service_name]</li>";
							}
						}
						echo "</ul></td>";
					echo '</tr>';
				}
			}
		?>
    </table>
    </div>
</body>
</html>

