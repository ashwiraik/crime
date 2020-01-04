<?php
include 'crdb.php';
session_start();
if (isset($_POST['submit'])) {
$Email_id = $_POST['Email_id'];
$alert = "";

$sql = "SELECT Email_id FROM user WHERE Email_id='$Email_id'";
$result = $link->query($sql);
$count = $result->num_rows;
if (!$count == 0) { 
$_SESSION["Email_id"] = $Email_id;
header('Location:forgot.php');
} else {
echo "<div class='alert alert-danger' role='alert'>
  Incorrect Email!
</div>";
}
} ?>

