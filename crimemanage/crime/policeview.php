<?php include "css/topforpolice.php" ?>		
		<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">Police List</h1>
    		</div>
<?php
include "crdb.php";
$query="select * from user where role='police' ";
$result=$link->query($query);

echo '<center><table border="1" class="table table-striped">
<tr>
<th>First name</th>
<th>Last name</th>
<th>Gender</th>
<th>Email id</th>
<th colspan="3">Action</th>
</tr>';
while ($row=mysqli_fetch_row($result))
 {
	echo "<tr>";
	 echo "<td>".$row[1]."</td>";
	  echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[5]."</td>";
	    echo "<td>".$row[12]."</td>";
	  
	          echo "<td><a class='btn btn-success' href='policedit.php?id=$row[0]'>edit</a></td>";
	    echo  "<td><a class='btn btn-danger' href='policedelete.php?id=$row[0]'>delete</a>
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