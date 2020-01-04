<?php
include "crdb.php";
session_start();
if(isset($_POST['submit'])) {
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$id = $_SESSION["id"];
$Criminal_name=$_POST['Criminal_name'];
 $Alias_name=$_POST['Alias_name'];
 $Gender=$_POST['Gender'];
 $Age=$_POST['Age'];
 //$Image=$_POST['Image'];
$Occupation=$_POST['Occupation'];
$Crime_type=$_POST['Crime_type'];
$Address=$_POST['Address'];
$Created_date=$_POST['Created_date'];

  $Image = basename( $_FILES["file"]["name"]);
 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
        {
        $Image = basename( $_FILES["file"]["name"]);
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
#-----------------------------------------------

 $query="INSERT INTO `criminal_list` (`Criminal_name`,`Alias_name`,`Gender`,`Age`,`Image`,`Occupation`,`Crime_type`,`Address`,`Created_date`) VALUES ('$Criminal_name','$Alias_name','$Gender','$Age','$Image','$Occupation','$Crime_type','$Address','$Created_date')";
$result=$link->query($query);
header('location:criminallistview.php');
}else{
header('location:criminallistadd.php');
}
?>
