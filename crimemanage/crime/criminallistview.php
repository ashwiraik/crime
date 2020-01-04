<?php include "css/topforpolice.php" ?>		
		<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">Criminal List</h1>
    		</div>
<?php
include "crdb.php";
$query="select * from criminal_list ";
$result=$link->query($query);
echo '<center><table border="1" class="table table-striped">
<tr>
<th>Criminal name</th>
<th>Alias name</th>
<th>gender</th>
<th>Age</th>
<th>Image</th>
<th>occupation</th>
<th>Crime type</th>
<th>Address</th>
<th>Created date</th>
<th colspan="3">Action</th>
 </tr>';
while ($row=mysqli_fetch_row($result))
 {
	echo "<tr>";
	 echo "<td>".$row[1]."</td>";
	  echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	    echo "<td>".$row[4]."</td>";
	     echo "<td><img src='img/$row[5]' width='100' /></td>";
	       echo "<td>".$row[6]."</td>";
	        echo "<td>".$row[7]."</td>";
	         echo "<td>".$row[8]."</td>";
	          echo "<td>".$row[9]."</td>";
	           
	     echo "<td><a class='btn btn-success' href='criminallistedit.php?id=$row[0]'>Edit</a></td>";
	     echo "<td><a class='btn btn-default' href='criminalcomplaintlist.php?id=$row[0]'>Complaint list</a></td>";
	     echo  "<td><a class='btn btn-danger'  href='criminallistdelete.php?id=$row[0]'>Delete</a>
	    </td>";
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>
</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

