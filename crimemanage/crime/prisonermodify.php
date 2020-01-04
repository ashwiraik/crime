<?php
include "crdb.php";
$id = $_POST['id'];

$Charge_sheetNo=$_POST['Charge_sheetNo'];
 $Name=$_POST['Name'];
 $Nickname=$_POST['Nickname'];
 $Crime_type=$_POST['Crime_type'];
 $Civil=$_POST['Civil'];
 $Family_members=$_POST['Family_members'];
 $Identification_marks=$_POST['Identification_marks'];
 $Height=$_POST['Height'];
 $Weight=$_POST['Weight'];
 $Colour=$_POST['Colour'];

 $query="UPDATE prisoner_registration SET `Charge_sheetNo`='$Charge_sheetNo',`Name`='$Name',`Nickname`='$Nickname',`Crime_type`='$Crime_type',`Civil`='$Civil',`Family_members`='$Family_members',`Identification_marks`='$Identification_marks',`Height`='$Height',`Weight`='$Weight',`Colour`='$Colour' WHERE `Prisoner_No`='$id'";
$result=$link->query($query);
header('location:prisonerlist.php');
?>