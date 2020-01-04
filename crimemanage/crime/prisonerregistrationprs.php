<?php
include "crdb.php";
session_start();
if(isset($_POST['submit'])) {


$id = $_SESSION["id"];
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

$Prisoner_No=$_POST['Prisoner_No'];
 $query="INSERT INTO `prisoner_registration` (`Charge_sheetNo`,`Name`,`Nickname`,`Crime_type`,`Civil`,`Family_members`,`Identification_marks`,`Height`,`Weight`,`Colour`) VALUES ('$Charge_sheetNo','$Name','$Nickname','$Crime_type','$Civil','$Family_members','$Identification_marks','$Height','$Weight','$Colour')";
$result=$link->query($query);
header('location:prisonerlist.php');
}else{
header('location:prisonerregistration.php');
}
?>
	