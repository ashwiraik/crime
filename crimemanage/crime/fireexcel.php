
<?php
	$filename = "Receipt_" . date('Ymd') . ".xls"; 
	header("Content-Disposition: attachment; filename=\"$filename\""); 
	header("Content-Type: application/vnd.ms-excel");
include "crdb.php";
$from=$_GET['from'];
$to=$_GET['to'];
$query="select * from fir where date(Date)>=date('$from') and date(Date)<=date('$to')";
$result=$link->query($query);
echo '<center><table border="1">
<tr>
<th>Fir id</th>
<th>District</th>
<th>Date</th>
<th>time</th>
<th>infomartion type</th>
<th>Place of occurance</th>
<th>Foreign/local</th>
<th>Act</th>
<th>fir number</th>
<th>section</th>
<th>Diary ref no</th>
<th>informant address</th>
<th>passport</th>
<th>complaint no</th>

<th>police</th>
<th>recieved time</th>
<th>information_rec</th>
<th>distance</th>
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
	          echo "<td>".$row[12]."</td>";
	       echo "<td>".$row[13]."</td>";
	          echo "<td>".$row[14]."</td>";
	       echo "<td>".$row[15]."</td>";
	          echo "<td>".$row[16]."</td>";
	       echo "<td>".$row[17]."</td>";
	     
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>

