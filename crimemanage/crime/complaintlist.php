<?php include "css/topforadmin.php" ?>		
	<section id="about-us"  style="background-image:url(images/list.jpg);">
        <div class="container-fluid">	
             <div class="jumbotron" style="background-color : transparent;color:white;"  >
    			<h1 class="display-3 text-center">Complaint List</h1>
    		</div>

      
      <div class ="row" style="margin-bottom: 10px;">
      	<div class="col-md-6 col-sm-6" >
    				<div class="well">
	<div class="container">
    
      
                <a   class='btn btn-default' style="margin-bottom: 10px;" href="createcomplaint.php"><b>Register complaint</b></a> <br>
                 <a  class='btn btn-default' style="margin-bottom: 10px;" href="userprofile.php">
                 <b>Profile </b></a><br>
        </div>
                 </div>
                 </div>
                 </div>

<?php
include "crdb.php";
$query="select * from complaint_registration ";
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
<th colspan="3">Action</th>
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
	     echo "<td><a class='btn btn-danger' href='cldelete.php?id=$row[0]'><b>Delete</b></a></td>";
	    echo  "<td><a class='btn btn-success' href='cledit.php?id=$row[0]'><b>edit</b></a>
	    </td>";
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>
</div>
</div>
</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

