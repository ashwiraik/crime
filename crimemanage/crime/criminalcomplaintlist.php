<?php include "css/topforpolice.php" ?>   
    <section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"   style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Complaint List</h1>
        </div>

      
<a href="createcomplaint.php">Register complaint</a> <br>
<a href="userprofile.php">Profile</a> <br>
<a href="Mostwanted.php">Mostwanted criminal list</a> <br>

<?php
include "crdb.php";
$crid=$_REQUEST["id"];

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
<th>Action</th>
<th>Action</th>
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
	     echo "<td><a  class='btn btn-default' href='crcomplaintadd.php?id=$row[0]&cid=$crid'>Add</a></td>";
	    echo  "<td><a class='btn btn-danger'  href='crcomplaintdelete.php?id=$row[0]'>Delete</a></td>";
	    
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>
</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

