<?php
include"crdb.php";
$id = $_POST['id'];
 $Complaint_no=$_POST['Complaint_no'];
 $Suspect_details =$_POST['Suspect_details'];
 $Description=$_POST['Description'];
 $Date=$_POST['Date'];
 $Crime_type=$_POST['Crime_type'];
 $Crime_date=$_POST['Crime_date'];
 $Crime_place=$_POST['Crime_place'];
 $query="UPDATE complaint_registration SET `Complaint_no`='$Complaint_no', `Suspect_details`='$Suspect_details', `Description`='$Description', `Date`='$Date', `Crime_type`='$Crime_type', `Crime_date`='$Crime_date', `Crime_place`='$Crime_place' where Complaint_id='$id'";
$result=$link->query($query);
echo "<script>alert('record modified successfully'); window.location = 'complaintlist.php';</script>";
?>