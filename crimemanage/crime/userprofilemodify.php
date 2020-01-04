<?php
include"crdb.php";
$id = $_POST['id'];


$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$User_name=$_POST['User_name'];
$Date_of_birth=$_POST['Date_of_birth'];
 $Gender=$_POST['Gender'];
 $Secret_question=$_POST['Secret_question'];
 $Secret_answer=$_POST['Secret_answer'];
 $Address=$_POST['Address'];
 $Pincode=$_POST['Pincode'];
 $Phone_no=$_POST['Phone_no'];
$Email_id=$_POST['Email_id'];
$Village=$_POST['Village'];
$Taluk=$_POST['Taluk'];
$District=$_POST['District'];
$State=$_POST['State'];



$query="UPDATE user SET First_name='$First_name',Last_name='$Last_name',User_name='$User_name',Gender='$Gender',Date_of_birth='$Date_of_birth',Secret_question='$Secret_question',Secret_answer='$Secret_answer',Address='$Address',Pincode='$Pincode',Phone_no= '$Phone_no',Email_id='$Email_id',Village='$Village',Taluk='$Taluk',District='$District',State='$State' WHERE  User_id='$id'";
$result=$link->query($query);
echo "<script>alert('record modified'); window.location = 'userprofile.php';</script>";

?>