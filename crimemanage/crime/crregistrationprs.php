<?php
include "crdb.php";
if(isset($_POST['submit'])) {
$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$User_name=$_POST['User_name'];
$Date_of_birth=$_POST['Date_of_birth'];
 $Gender=$_POST['Gender'];
 $Secret_question=$_POST['Secret_question'];
 $Secret_answer=$_POST['Secret_answer'];
 $Address=$_POST['Address'];
 $Pincode=$_POST['Pincode'];
$Email_id=$_POST['Email_id'];
$Village=$_POST['Village'];
$Taluk=$_POST['Taluk'];
$District=$_POST['District'];
$State=$_POST['State'];
$Role="";
if(isset($_POST['Role']))
{
	$Role=$_POST['Role'];
}
else
{
	$Role="user";
}
$sql = "SELECT Email_id FROM user WHERE Email_id='$Email_id'";
$select= $link->query($sql);
$count = 0;
if($select){
	$count = $select->num_rows;

}

if($count != 0) {
	
	header('location:crregistration.php?er=error');
} else {
 $Password=$_POST['Password'];
 $Phone_no=$_POST['Phone_no'];
 $query="INSERT INTO `user` (`First_name`,`Last_name`,`User_name`,`Date_of_birth`,`Gender`,`Secret_question`,`Secret_answer`,`Address`,`Pincode`,`Phone_no`, `Email_id`, `Village`,`Taluk`,`District`,`State`,`Role`,`Password`) VALUES ('$First_name','$Last_name','$User_name','$Date_of_birth','$Gender','$Secret_question','$Secret_answer','$Address','$Pincode','$Phone_no','$Email_id', '$Village','$Taluk','$District','$State','$Role','$Password')";
$result=$link->query($query);
echo "<script>alert('added Successfully'); window.location = 'crlogin.php';</script>";

}
}else{
	header('location:crregistration.php');
}
?>