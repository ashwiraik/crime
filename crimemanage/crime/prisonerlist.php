<?php include "css/topforpolice.php" ?>		
	<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron" style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">Prisoner List</h1>
    		</div>
    		
<?php
include "crdb.php";
$query="select * from prisoner_registration ";
$result=$link->query($query);
echo '<center><table border="1" class="table table-striped">
<tr>
<th>Prisoner No</th>
<th>charge sheet no</th>
<th>name</th>
<th>nickname</th>
<th>crime type</th>
<th>civil</th>
<th>family members</th>
<th>identification marks</th>
<th>height</th>
<th>weight</th>
<th>colour</th>
<th colspan="3">Action</th>
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
	          
	          echo "<td><a class='btn btn-success' href='prisoneredit.php?id=$row[0]'>edit</a></td>";
	    echo  "<td><a class='btn btn-danger' href='prisonerdelete.php?id=$row[0]'>delete</a>
	    </td>";
	    echo "</tr>";
	       }
	  echo "</table>";


?>
<br><br><br><br><br><br><br>
</div>


   </div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>