<?php include "css/topforadmin.php" ?>		
	<section id="about-us" style="background-image:url(images/dsk.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron" style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">User List</h1>
    		</div>
    		

<?php
include "crdb.php";
$query= "SELECT * FROM  user";
$result=$link->query($query);
echo '<center><table width="container" border="1" class="table table-striped" >
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Date of birth</th>
<th>Address</th>
<th>Pincode</th>
<th>Phone no</th>
<th>Email id</th>
<th>Village</th>
<th>Taluk</th>
<th>District</th>
<th>State</th>
<th>Role</th>
<th colspan="3">Action</th>
</tr>';
while ($row=mysqli_fetch_row($result))
 {
	echo "<tr>";
	 echo "<td>".$row[1]."</td>";
	  echo "<td>".$row[2]."</td>";
	 //  echo "<td>".$row[3]."</td>";
	   // echo "<td>".$row[4]."</td>";
	     echo "<td>".$row[5]."</td>";
	     echo "<td>".$row[6]."</td>";
	      //echo "<td>".$row[7]."</td>";
	     // echo "<td>".$row[8]."</td>";
	      echo "<td>".$row[9]."</td>";
	      echo "<td>".$row[10]."</td>";
	      echo "<td>".$row[11]."</td>";
	      echo "<td>".$row[12]."</td>";
	      echo "<td>".$row[13]."</td>";
	      echo "<td>".$row[14]."</td>";
	      echo "<td>".$row[15]."</td>";
	      echo "<td>".$row[16]."</td>";
	      echo "<td>".$row[17]."</td>";
	       echo "<td><a class='btn btn-danger' href='crdelete.php?id=$row[0]'>Delete</a></td>";
	       echo "<td><a class='btn btn-success' href='usredit.php?id=$row[0]'>edit</a></td>";
	        echo "<td><a class='btn btn-default' href='userprofileadmin.php?id=$row[0]'>view profile</a></td>";
	      echo "</tr>";
	      }
	  echo "</table>";
	  
?>
<br><br><br><br><br><br><br><br><br><br><br><br>


  </div><!--/.container-->
    </section><!--/about-us-->
<?php
include "css/footer.php";
?>