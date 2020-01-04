<?php
include"crdb.php";
$id = $_POST['id'];
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

  $query="UPDATE fir SET `District`='$District', `Date`='$Date',`Time`='$Time',`Information_type`='$Information_type',`Place_of_occurence`='$Place_of_occurence',`Foriegn_Local`='$Foriegn_Local',`Act`='$Act',`FIR_No`='$FIR_No',`Section`='$Section',`Diary_refno`='$Diary_refno',`Informant_add`='$Informant_add',`Passport_No`='$Passport_No',`Complaint_No`='$Complaint_No',`Police`='$Police',`Received_time`='$Received_time',`Information_Rec`='$Information_Rec',`Distance_polst`='$Distance_polst' WHERE  `Fir_id`='$id'";
$result=$link->query($query);
header('location:firlist.php');
?>