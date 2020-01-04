
<?php
	$filename = "Receipt_" . date('Ymd') . ".xls"; 
	header("Content-Disposition: attachment; filename=\"$filename\""); 
	header("Content-Type: application/vnd.ms-excel");
include "crdb.php";
$from=$_GET['from'];
$to=$_GET['to'];
$query="select * from post_moterm where date(Death_date)>=date('$from') and date(Death_date)<=date('$to')";
$result=$link->query($query);
echo '<center><table border="1" class="table table-striped">
<tr>
<th>Postmoterm_No</th>
<th>Fir_id</th>
<th>Result</th>
<th>Person_name</th>
<th>Gender</th>
<th>Death_date</th>
<th>Death_time</th>
<th>Death_place</th>
<th>Death_type</th>
<th>Case_Description</th>
<th>Doctor_name</th>
<th>PoliceStation</th>
</tr>';
while ($row=mysqli_fetch_row($result))
 {
	
	echo "<tr>";
	 echo "<td>".$row[0]."</td>";
	  echo "<td>".$row[1]."</td>";
	    echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	    echo "<td>".$row[4]."</td>";
	     echo "<td>".$row[5]."</td>";
	       echo "<td>".$row[6]."</td>";
	          echo "<td>".$row[7]."</td>";
	       echo "<td>".$row[8]."</td>";
	       echo "<td>".$row[9]."</td>";
	     echo "<td>".$row[10]."</td>";
	       echo "<td>".$row[11]."</td>";
	     
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>

