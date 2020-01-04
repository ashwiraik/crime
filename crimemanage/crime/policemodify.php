<?php
include"crdb.php";
session_start();


$First_name=$_POST['First_name'];
$id = $_SESSION["id"];
$Last_name=$_POST['Last_name'];
 $Gender=$_POST['Gender'];
 $Email_id=$_POST['Email_id'];
 $Jurisdiction=$_POST['Jurisdiction'];
$Designation=$_POST['Designation'];
$Status=$_POST['Status'];
 $query="UPDATE `police` SET `First_name`='$First_name',`Last_name`='$Last_name,`Gender`='$Gender',`Email_id`='$Email_id,`Jurisdiction`='$Jurisdiction',`Designation`='$Designation',`Status`='$Status' WHERE `Detailed_id`='$id'";
$result=$link->query($query);
header('location:policeview.php');
?>