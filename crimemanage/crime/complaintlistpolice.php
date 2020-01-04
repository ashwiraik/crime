<?php include "css/topforpolice.php" ?>		
	<section id="about-us" style="background-image:url(images/list.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">COMPLAINT LIST</h1>
    		</div>

     
<script>
	function validation1()
	{
		if((document.getElementById('cdate').value=="")&&(document.getElementById('cplace').value=="")&&(document.getElementById('ctype').value=="")&&(document.getElementById('creg').value==""))
		{
					document.search.action="complaintlistpolice.php?sid=1";
		}

		else
		{
				document.search.action="complaintlistpolice.php?sid=0";
		}
	
			document.search.method="post";
			document.search.submit();
	}
</script>

<?php
include "crdb.php";
$id=$_REQUEST['sid'];
$place=$date=$type=$reg='';
if(isset($_POST['cdate']))
{
$date=$_POST['cdate'];
}

if(isset($_POST['ctype']))
{
$type=$_POST['ctype'];
}


if(isset($_POST['cplace']))
{
$place=$_POST['cplace'];
}

if(isset($_POST['creg']))
{
	$reg=$_POST['creg'];

}if ($id==1)
{

$query="select * from complaint_registration where fir_status!='active'";
}
if(($place=='')&&($type=='')&&($reg=='')&&($date!=''))
{
$query="select * from complaint_registration where Date like '$date%' and fir_status!='active'";
}
if(($place!='')&&($type=='')&&($reg=='')&&($date==''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and fir_status!='active'";
}

if(($place=='')&&($type!='')&&($reg=='')&&($date==''))
{
$query="select * from complaint_registration where Crime_type like '$type%' and fir_status!='active'";
}
if(($place=='')&&($type=='')&&($reg!='')&&($date==''))
{
$query="select * from complaint_registration where User_id like '$reg%' and fir_status!='active'";
}
if(($place!='')&&($type!='')&&($reg=='')&&($date==''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and Crime_type like '$type%' and fir_status!='active'";
}
if(($place!='')&&($type!='')&&($reg!='')&&($date==''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and Crime_type like '$type%' and  User_id like '$reg%' and fir_status!='active'";
}
if(($place!='')&&($type!='')&&($reg!='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and Crime_type like '$type%' and  User_id like '$reg%' and  Date like '$date%' and fir_status!='active'";
}
if(($place=='')&&($type=='')&&($reg!='')&&($date!=''))
{
$query="select * from complaint_registration where  User_id like '$reg%' and  Date like '$date%' and fir_status!='active'";
}
if(($place=='')&&($type!='')&&($reg=='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_type like '$type%' and  Date like '$date%' and fir_status!='active'";
}
if(($place=='')&&($type!='')&&($reg!='')&&($date==''))
{
$query="select * from complaint_registration where Crime_type like '$type%' and  User_id like '$reg%' and fir_status!='active'";
}
if(($place=='')&&($type!='')&&($reg!='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_type like '$type%' and  User_id like '$reg%' and  Date like '$date%' and fir_status!='active'";
}
if(($place!='')&&($type=='')&&($reg=='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and Date like '$date%' and fir_status!='active'";
}
if(($place!='')&&($type!='')&&($reg!='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and Crime_type like '$type%' and  User_id like '$reg%' and  Date like '$date%' and fir_status!='active'";
}
if(($place!='')&&($type=='')&&($reg!='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and User_id like '$reg%' and  Date like '$date%' and fir_status!='active'";
	}
if(($place!='')&&($type=='')&&($reg!='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and  User_id like '$reg%' and  Date like '$date%' and fir_status!='active'";
	}
if(($place!='')&&($type!='')&&($reg=='')&&($date!=''))
{
$query="select * from complaint_registration where Crime_place like '$place%' and Crime_type like '$type%' and  Date like '$date%' and fir_status!='active'";
	}
$result=$link->query($query);
echo "<form name='search'>"
?>
crime date<input type="date" name="cdate" id="cdate">
crime place<input type="text" name="cplace" id="cplace">
crime type<input type="text" name="ctype" id="ctype">
registered id<input type="text" name="creg" id="creg">
<button type="button" onclick="validation1()">search</button>
<br>
<br>
<br><center>
<?php 
echo '<center><table border="1" class="table table-striped">
<tr>
<tr>
<th>Complaint id</th>
<th>Complaint no</th>
<th>Suspect details</th>
<th>Description</th>
<th>Crime date</th>
<th>Crime type</th>
<th>Crime place</th>
<th>registered id</th>
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

 	 echo "<td>".$row[2]."</td>";
 	
	       
	     echo "<td><a href='firadd.php?id=$row[0]'>&nbsp;&nbsp;&nbsp;FIR&nbsp;&nbsp;&nbsp;</a></td>";
	  
	    echo "</tr>";
	       }
	  echo "</table></form>";
?>
<br><br><br><br><br><br>
</div>
</div>
</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

