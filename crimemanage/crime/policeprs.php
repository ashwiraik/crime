<?php
include "crdb.php";
session_start();
if(isset($_POST['submit'])) {

$First_name=$_POST['First_name'];
$id = $_SESSION["id"];
$Last_name=$_POST['Last_name'];
 $Gender=$_POST['Gender'];
 $Email_id=$_POST['Email_id'];
 $Jurisdiction=$_POST['Jurisdiction'];
$Designation=$_POST['Designation'];
$Status=$_POST['Status'];
  $query="INSERT INTO `police` (`First_name`,`Last_name`,`Gender`,`Email_id`,`Jurisdiction`,`Designation`,`Status`) VALUES ('$First_name','$Last_name','$Gender','Email_id','$Jurisdiction','$Designation','$Status')";
$result=$link->query($query);
header('location:policeview.php');
}else{
header('location:policeadd.php');
}
?>
