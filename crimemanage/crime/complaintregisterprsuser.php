<?php
include "./crdb.php";
session_start();
if(isset($_POST['submit'])) {

$Complaint_no=$_POST['Complaint_no'];
$id = $_SESSION["id"];
$Suspect_details =$_POST['Suspect_details'];
 $Description=$_POST['Description'];
 $Date=$_POST['Date'];
 $Crime_type=$_POST['Crime_type'];
 $Crime_date=$_POST['Crime_date'];
 $Crime_place=$_POST['Crime_place'];

//echo "$id";
$Complaint_no=$_POST['Complaint_no'];
 $query="INSERT INTO `complaint_registration` (`Complaint_no`, `User_id`,`Suspect_details`,`Description`,`Date`, `Crime_type`,`Crime_date`,`Crime_place`) VALUES ('$Complaint_no','$id','$Suspect_details','$Description','$Date','$Crime_type','$Crime_date','$Crime_place')";

 $result=$link->query($query);
echo "<script>alert('complaint registered'); window.location = 'complaintlistuser.php';</script>";
}
?>