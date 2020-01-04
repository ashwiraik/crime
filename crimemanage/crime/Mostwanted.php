<?php include "css/topforpolice.php" ?>		
		<section id="about-us" style="background-image:url(images/mostw.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">Mostwanted Criminals</h1>
    		</div>
  <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:blue;">
<?php
include "crdb.php";

 $query="SELECT cc.criminal_id,cl.Criminal_name, count(cc.criminal_id) crcnt FROM `criminal_complaint` cc,criminal_list cl WHERE cc.criminal_id=cl.Criminal_id group by cc.criminal_id having count(crcnt)>1 order by crcnt desc";
$result=$link->query($query);
echo '<center><table border="2" class="table table-striped">
<tr>
<th>Criminal id</th>
<th>Criminal name</th>
<th>Crime Count</th>
 </tr>';
while ($row=mysqli_fetch_row($result)) 
{
echo "<tr>";
	 echo "<td>".$row[0]."</td>";
	  echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2]."</td>";
         echo "</tr>";
}
  echo "</table>";
	  
?>
<br><br><br><br><br>
</div>
</div>
 </div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>


