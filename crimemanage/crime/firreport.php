<?php include "css/topforadmin.php" ?>	
<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
	
    			<h1 class="display-3 text-center">FIR Report</h1>
    		</div>

      <center> 
      
      	<?php
      	include "crdb.php"; ?>
<form name="report" method="POST"><b>
 FROM DATE</b> <input type="date" id="from" name="from"  required/>
<b>TO DATE </b><input type="date" id="to" name="to"  required/>
<input type="submit" name="submit" class="btn btn-info" > 
<?php
if (isset($_POST['submit'])) {
	
$from=$_POST['from'];
$to=$_POST['to'];

	?>
   <a href="fireexcel.php?from=<?php echo $from;?>&to=<?php echo $to;?>" class="btn btn-success">Export to Excel</a>
 <br><br><br><br>
   </form>   	


   
<?php
$query="select * from fir where date(Date)>=date('$from') and date(Date)<=date('$to')";

$result=$link->query($query);
echo '<center><table border="1" class=" table table-striped">
<tr>
<th>Fir id</th>
<th>District</th>
<th>Date</th>
<th>Time</th>
<th>Infomartion type</th>
<th>Place of occurance</th>
<th>Act</th>
<th>Fir number</th>
<th>Section</th>
<th>Diary ref no</th>
<th>Informant address</th>
<th>Complaint no</th>
<th>police</th>
<th>Recieved time</th>
<th>Information rec</th>
<th>Distance</th>
</tr>';
while ($row=mysqli_fetch_row($result))
 {
	echo "<tr>";
	 echo "<td>".$row[0]."</td>";
	  echo "<td>".$row[1]."</td>";
	    echo "<td>".$row[2]."</td>";
	   echo "<td>".date("h:m:sA",strtotime($row[3]))."</td>";
	    echo "<td>".$row[4]."</td>";
	     echo "<td>".$row[5]."</td>";
	      // echo "<td>".$row[6]."</td>";
	          echo "<td>".$row[7]."</td>";
	       echo "<td>".$row[8]."</td>";
	       echo "<td>".$row[9]."</td>";
	     echo "<td>".$row[10]."</td>";
	       echo "<td>".$row[11]."</td>";
	       //   echo "<td>".$row[12]."</td>";
	       echo "<td>".$row[13]."</td>";
	          echo "<td>".$row[14]."</td>";
	       echo "<td>".date("h:m:sA",strtotime($row[15]))."</td>";
	          echo "<td>".$row[16]."</td>";
	       echo "<td>".$row[17]."</td>";
	     
	    echo "</tr>";
	       }
	  echo "</table>";
	 } 
?>
</form>

</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

