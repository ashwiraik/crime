<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"  style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Postmoterm List</h1>
        </div>
 
<?php
include "crdb.php";
$query="select * from post_moterm ";
$result=$link->query($query);
echo '<center><table border="1" class="table table-striped">
<tr>
<th>Postmoterm No</th>
<th>Result</th>
<th>Person name</th>
<th>Gender</th>
<th>Death date</th>
<th>Death time</th>
<th>Death place</th>
<th>Death type</th>
<th>Case decription</th>
<th>Doctor name</th>
<th>Police station</th>
<th colspan="3">Action</th>
 </tr>';
while ($row=mysqli_fetch_row($result))
 {
	echo "<tr>";
	 echo "<td>".$row[0]."</td>";
	  echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	    echo "<td>".$row[4]."</td>";
	     echo "<td>".$row[5]."</td>";
	       echo "<td>".$row[6]."</td>";
	        echo "<td>".$row[7]."</td>";
	         echo "<td>".$row[8]."</td>";
	          echo "<td>".$row[9]."</td>";
	           echo "<td>".$row[10]."</td>";
	            echo "<td>".$row[11]."</td>";
	          echo "<td><a class='btn btn-success' href='postmotermedit.php?id=$row[0]'>edit</a></td>";
	    echo  "<td><a class='btn btn-danger' href='postmotermdelete.php?id=$row[0]'>delete</a>
	    </td>";
	    echo "</tr>";
	       }
	  echo "</table>";
	  
?>
<br><br><br><br><br><br>
</div>
  </div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>
