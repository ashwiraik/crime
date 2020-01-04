
<?php include "css/topforadmin.php" ?>	

<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">
      <div class="jumbotron" style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">Complaint Report</h1>
    		</div>

           <center> 
      	<?php
      	include "crdb.php"; ?>
<form name="report" method="POST">
<b> FROM DATE </b><input type="date" id="from" name="from"  required/>
<b>TO DATE </b><input type="date" id="to" name="to"  required/>
<input type="submit" name="submit" class="btn btn-info" > 
<?php
if (isset($_POST['submit'])) {
	
$from=$_POST['from'];
$to=$_POST['to'];

	?>
   <a href="complaintexcel.php?from=<?php echo $from;?>&to=<?php echo $to;?>" class="btn btn-success">Export to Excel</a>
 <br><br><br><br>
   </form>   	


   
<?php
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
	}  
?>
</form>
<br><br><br><br><br><br><br><br>
</center>
</div>

</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

