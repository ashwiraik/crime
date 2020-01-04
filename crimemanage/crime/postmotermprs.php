<?php
include "crdb.php";
session_start();
if(isset($_POST['submit'])) {


$id = $_SESSION["id"];
$Result=$_POST['Result'];
 $Person_name=$_POST['Person_name'];
 $Gender=$_POST['Gender'];
 $Death_date=$_POST['Death_date'];
 $Death_time=$_POST['Death_time'];
$Death_place=$_POST['Death_place'];
$Death_type=$_POST['Death_type'];
$Case_Description=$_POST['Case_Description'];
$Doctor_name=$_POST['Doctor_name'];
$PoliceStation=$_POST['PoliceStation'];


$Postmoterm_No=$_POST['Postmoterm_No'];
  $query="INSERT INTO `post_moterm` (`Postmoterm_No`,`Result`,`Person_name`,`Gender`,`Death_date`,`Death_time`,`Death_place`,`Death_type`,`Case_Description`,`Doctor_name`,`PoliceStation`) VALUES ('$Postmoterm_No','$Result','$Person_name','$Gender','$Death_date','$Death_time','$Death_place','$Death_type','$Case_Description','$Doctor_name','$PoliceStation')";

$result=$link->query($query);
header('location:postmotermlist.php');
}else{
header('location:postmotermadd.php');
}
?>
