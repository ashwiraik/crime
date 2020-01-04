<?php include "css/topforadmin.php" ?>		
	<section id="about-us" style="background-image:url(images/firr.jpg);">
        <div class="container-fluid">			
			<div class="jumbotron"   style="background-color : transparent;color:white;" >
    			<h1 class="display-3 text-center">Reports</h1>
    		</div>
    		<div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<?php

if( !isset($_SESSION['username']))
{
	header('location:crlogin.php');
} ?>


<p><b>You have logged in</b></p>
<a href="complaintreport.php"><b>Complaint report</b></a> <br>
<a href="firreport.php"><b>FIR report</b></a> <br>
<a href="postreport.php"><b>Post-morterm report</b></a> <br>


<br><br><br><br><br><br><br><br>
</div>
</div>
</div><!--/.container-->
    </section><!--/about-us-->
	
	
<?php include "css/footer.php" ?>

