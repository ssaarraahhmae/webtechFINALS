<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT  sp_id, sp_name FROM service_provider WHERE isAcceptedSP = 'F'";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pending Service Providers</title>
</head>
    <style>
* {
  box-sizing: border-box;
}


#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
<body>
                            Sort By:
                            <button class="Sortbutton" onclick="sortTableServices()">Service</button>
                            <button class="Sortbutton" onclick="sortTableName()">Name</button>
    <div style="overflow-x:auto;">
	<table id="myTable">
		<tr>
			<th>Name</th>
			<th>Service Offered</th>
		</tr>
		<?php
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
				echo '<tr>';
					echo "<td>$row[sp_name]</td>";
					echo "<td><ul>";
					$sql1 = "SELECT id_service FROM provider_specialization WHERE id_sp = '$row[sp_id]'";
					$result1 = $conn->query($sql1);
					while ($row1 = $result1->fetch_assoc()) {
						$sql2 = "SELECT service_name FROM services WHERE service_id = '$row1[id_service]'";
						$result2 = $conn->query($sql2);
						while ($row2 = $result2->fetch_assoc()) {
							echo "<li>$row2[service_name]</li>";
						}
					}
					echo "</ul></td>";
					/* $sql1 = "SELECT * FROM provider_specialization WHERE id_sp = '$row[sp_id]'";
					$result1 = $conn->query($sql1);
					echo "<td>";
					while ($row1 = $result1->fetch_assoc()) {
						$sql2 = "SELECT sevice_name FROM services WHERE service_id = 'row1[id_service]'";
						$result2 = $conn->query($sql2);
						while ($row2 = $result2->fetch_assoc()) {
							echo "<ul><li>$row2[service_name]</li></ul>";
						}
						echo "</td>";
						
						
					}
					echo "</td>"*/
					?>
					<form action="php/accept.php" method="GET">
						<td><button type="submit" name="accept" value="<?php print $row['sp_id']; ?>">Approve</button></td>
					</form>
					<form action="php/deny.php" method="GET">
						<td><button type="submit" name="deny" value="<?php print $row['sp_id']; ?>">Deny</button></td>
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
	<script>
function sortTableName() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
        
        
        function sortTableServices() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
</body>
</html>

