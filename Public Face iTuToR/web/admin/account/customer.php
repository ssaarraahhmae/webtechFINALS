<?php
	session_start();
	include '../../php/dbh.php';
	$sql = "SELECT * FROM requests WHERE status != 'Pending'";
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
    
    <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
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
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <div style="overflow-x:auto;">
	<table id="myTable">
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
				  echo "<td>$row[customer_id]</td>";
          $sql1 = "SELECT customer_name FROM customer WHERE customer_id = $row[customer_id]";
          $result1 = $conn->query($sql1);
          while ($row1 = $result1->fetch_assoc()) {
            echo "<td>$row1[customer_name]</td>";
          }
          $sql2 = "SELECT service_name FROM services WHERE service_id = $row[service_id]";
          $result2 = $conn->query($sql2);
          while ($row2 = $result2->fetch_assoc()) {
            echo "<td>$row2[service_name]</td>";
          }
          
					echo "<td>$row[status]</td>";
				echo '</tr>';	
				}
			}
		?>
	</table>
            <br>
    </div>
    
    <script>
        function myFunction() {
          // Declare variables 
          var input, filter, table, tr, td, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            } 
          }
        }
        </script>
</body>
</html>