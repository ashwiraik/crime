<?php
include "crdb.php";
session_start();
if(isset($_POST['submit'])) {
$id = $_SESSION["id"];
$District=$_POST['District'];
$Date=$_POST['Date'];
$Time=$_POST['Time'];
$Information_type=$_POST['Information_type'];
$Place_of_occurence=$_POST['Place_of_occurence'];
$Foriegn_Local=$_POST['Foriegn_Local'];
$Act=$_POST['Act'];
$FIR_No=$_POST['FIR_No'];
$Section=$_POST['Section'];
$Diary_refno=$_POST['Diary_refno'];
$Informant_add=$_POST['Informant_add'];
$Passport_No=$_POST['Passport_No'];
$Complaint_No=$_POST['Complaint_No'];
$Police=$_POST['Police'];
$Received_time=$_POST['Received_time'];
$Information_Rec=$_POST['Information_Rec'];
$Distance_polst=$_POST['Distance_polst'];

$FIR_No=$_POST['FIR_No'];
 echo $query="INSERT INTO `fir`(`District`, `Date`, `Time`, `Information_type`, `Place_of_occurence`, `Foriegn_Local`, `Act`, `FIR_No`, `Section`, `Diary_refno`, `Informant_add`, `Passport_No`, `Complaint_No`, `Police`, `Received_time`, `Information_Rec`, `Distance_polst`) VALUES ('$District','$Date','$Time','$Information_type','$Place_of_occurence','$Foriegn_Local','$Act','$FIR_No','$Section','$Diary_refno','$Informant_add','$Passport_No','$Complaint_No','$Police','$Received_time','$Information_Rec','$Distance_polst')";
$result=$link->query($query);
 echo $query="UPDATE `complaint_registration` SET `fir_status`='active' where Complaint_id='$Complaint_No'";
$result=$link->query($query);

header('location:firlist.php');
}else{
header('location:firadd.php');
}
?>