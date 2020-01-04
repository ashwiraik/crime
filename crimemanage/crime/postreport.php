
<?php include "css/topforadmin.php" ?>	
<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">POST MORTERM REPORT</h1>
    		</div>
  
      <center> 
      	<?php
      	include "crdb.php"; ?>
<form name="report" method="POST">
 FROM DATE <input type="date" id="from" name="from"  required/>
TO DATE <input type="date" id="to" name="to"  required/>
<input type="submit" name="submit" class="btn btn-info" > 
<?php
if (isset($_POST['submit'])) {
	
$from=$_POST['from'];
$to=$_POST['to'];

	?>
   <a href="postexcel.php?from=<?php echo $from;?>&to=<?php echo $to;?>" class="btn btn-success">Export to Excel</a>
 <br><br><br><br>
   </form>   	


   
<?php
$query="select * from post_moterm where date(Death_date)>=date('$from') and date(Death_date)<=date('$to')";

$result=$link->query($query);
echo '<center><table class="table table-bordered table-striped">
<tr>

<th>Postmoterm_No</th>

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
	 
	    echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	    echo "<td>".$row[4]."</td>";
	     echo "<td>".date("d-m-Y",strtotime($row[5]))."</td>";
	       echo "<td>".date("h:m:sA",strtotime($row[6]))."</td>";
	          echo "<td>".$row[7]."</td>";
	       echo "<td>".$row[8]."</td>";
	       echo "<td>".$row[9]."</td>";
	     echo "<td>".$row[10]."</td>";
	       echo "<td>".$row[11]."</td>";
	     
	     
	    echo "</tr>";
	       }
	  echo "</table>";
	}  

?>
</form>
<br><br><br><br><br>
</center>
</div>
</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

