
<?php
$filename = "Receipt_" . date('Ymd') . ".xls"; 
	header("Content-Disposition: attachment; filename=\"$filename\""); 
	header("Content-Type: application/vnd.ms-excel");
include "crdb.php";
$from=$_GET['from'];
$to=$_GET['to'];
$query="select * from complaint_registration where date(Date)>=date('$from') and date(Date)<=date('$to')";
$result=$link->query($query);
echo '<center><table border="1" class="table table-striped">
<tr>
<th>Complaint id</th>
<th>Complaint no</th>
<th>Suspect details</th>
<th>Description</th>
<th>Crime date</th>
<th>Crime type</th>
<th>Crime place</th>
</tr>';
while ($row=mysqli_fetch_row($result))
 {
	echo "<tr>";
	 echo "<td>".$row[0]."</td>";
	  echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[3]."</td>";
	    echo "<td>".$row[4]."</td>";
	     echo "<td>".$row[5]."</td>";
	       echo "<td>".$row[6]."</td>";
	       echo "<td>".$row[8]."</td>";
	     
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>

