<?php include "css/topforpolice.php" ?>		
		<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">FIR List</h1>
    		</div>
 <?php		
include "crdb.php";
$query="select * from fir ";
$result=$link->query($query);
echo '<center><table border="1" class="table table-striped">
<tr>
<th>District</th>
<th>Date</th>
<th>Time</th>
<th>Information type</th>
<th>Place of occurence</th>
<th>Act</th>
<th>FIR No</th>
<th>Section</th>
<th>Diary reference no</th>
<th>Informant address</th>
<th>Complaint No</th>
<th>Police</th>
<th>Received time</th>
<th>Information record</th>
<th>Distance from police station</th>
<th colspan="3">Action</th>
</tr>';
while ($row=mysqli_fetch_row($result))
 {
	echo "<tr>";
	 echo "<td>".$row[1]."</td>";
	  echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	    echo "<td>".$row[4]."</td>";
	     echo "<td>".$row[5]."</td>";
	       echo "<td>".$row[7]."</td>";
	        echo "<td>".$row[8]."</td>";
	         echo "<td>".$row[9]."</td>";
	          echo "<td>".$row[10]."</td>";
	           echo "<td>".$row[11]."</td>";
	         //   echo "<td>".$row[12]."</td>";
	             echo "<td>".$row[13]."</td>";
	              echo "<td>".$row[14]."</td>";
	               echo "<td>".$row[15]."</td>";
	                echo "<td>".$row[16]."</td>";
	                 echo "<td>".$row[17]."</td>";

	     echo "<td><a class='btn btn-success'  href='firedit.php?id=$row[0]'>edit</a></td>";
	    echo  "<td><a Class='btn btn-danger' href='firdelete.php?id=$row[0]'>delete</a>
	    </td>";
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>

</div><!--/.container-->
    </section><!--/about-us-->
	
	
<?php include "css/footer.php" ?>
