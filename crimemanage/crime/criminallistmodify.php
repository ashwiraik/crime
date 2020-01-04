<?php
include "crdb.php";

$id = $_REQUEST["id"];
$Criminal_name=$_POST['Criminal_name'];
 $Alias_name=$_POST['Alias_name'];
 $Gender=$_POST['Gender'];
 $Age=$_POST['Age'];
$Occupation=$_POST['Occupation'];
$Crime_type=$_POST['Crime_type'];
$Address=$_POST['Address'];
$Created_date=$_POST['Created_date'];
 

   $Image = basename( $_FILES["file"]["name"]);


        if($Image=="")
        {
  $query="UPDATE `criminal_list` SET `Criminal_name`='$Criminal_name', `Alias_name`='$Alias_name', `Gender`='$Gender', `Age`='$Age', `Occupation`='$Occupation', `Crime_type`='$Crime_type', `Address`='$Address' , `Created_date`='$Created_date' WHERE  `Criminal_id`='$id'";
        }
        else
        {
  $query="UPDATE `criminal_list` SET `Criminal_name`='$Criminal_name', `Alias_name`='$Alias_name', `Gender`='$Gender', `Age`='$Age', `Image`='$Image', `Occupation`='$Occupation', `Crime_type`='$Crime_type', `Address`='$Address' , `Created_date`='$Created_date' WHERE  `Criminal_id`='$id'";
}
 $result=$link->query($query);
echo "<script>alert('record modified successfully'); window.location = 'criminallistview.php';</script>";
?>