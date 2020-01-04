<?php
include "crdb.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$id="";
// echo "$username";
// echo "$password";
// echo "$role";
$sql="SELECT User_id,Password,Role FROM user WHERE User_name='$username'";
$result=$link->query($sql);
$dbpassword="";
$role     = "";
while($row=mysqli_fetch_row($result))
{
	$dbpassword=$row[1];
	$role = $row[2];
	$id = $row[0];
}
if($dbpassword==$password)
{
$_SESSION["id"] = $id;
$_SESSION['username'] = $username;
if($role=="admin") {
	header('location: adminhome.php');
	// echo "$role";
} elseif ($role == "user") {
	header('location: crhome.php');
	// echo "$role";
}  elseif($role == "police")  {
	header('location: policehome.php');
	// echo "$role";
} else {
	header('location: policehome.php');
	// echo "$role";
}
echo "logged in";
echo "$id";
}
else
{
echo "<script>alert('incorrect username and password'); window.location = 'crlogin.php';</script>";
}
?>
