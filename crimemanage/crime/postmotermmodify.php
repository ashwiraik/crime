<?php
include"crdb.php";

session_start();

$id = $_POST['id'];

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

  echo $query="UPDATE post_moterm SET `Result`='$Result',`Person_name`='$Person_name',`Gender`='$Gender',`Death_date`='$Death_date',`Death_time`='$Death_time',`Death_place`='$Death_place',`Death_type`='$Death_type',`Case_Description`='$Case_Description',`Doctor_name`='$Doctor_name',`PoliceStation`='$PoliceStation' WHERE `Postmoterm_No`='$id'";
$result=$link->query($query);
header('location:postmotermlist.php');
?>