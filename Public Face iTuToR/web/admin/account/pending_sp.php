<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT  account_id, name, service, specialization FROM registration WHERE status = 'pending'";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pending Service Providers</title>
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
			<th>Specialization</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
				echo '<tr>';
					echo "<td>$row[name]</td>";
					echo "<td>$row[service]</td>";
					echo "<td>$row[specialization]</td>";?>
					<form action="php/accept.php" method="GET">
						<td><button type="submit" name="accept" value="<?php print $row['account_id']; ?>">Approve</button></td>
					</form>
					<form action="php/deny.php" method="GET">
						<td><button type="submit" name="deny" value="<?php print $row['account_id']; ?>">Deny</button></td>
					</form>
					<?php
				echo '</tr>';
			}
		?>
        
    </table><br>
    </div>
	<?php
		} else {
				echo 'No more pending requests.';
			}
	?>	
	
</body>
</html>

