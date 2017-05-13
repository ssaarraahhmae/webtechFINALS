<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payments</title>
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
			<th>SPID</th>
			<th>Cust ID</th>
			<th>Date Start</th>
			<th>Date End</th>
			<th>Service</th>
		</tr>
	</table>
    </div>
	
</body>
</html>