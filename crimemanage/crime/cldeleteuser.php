<?php
include "crdb.php";
$id=$_GET["id"];
 $query="Delete from complaint_registration where Complaint_id=$id";
$result=$link->query($query);
echo "<script>alert('record deleted successfully'); window.location = 'complaintlistuser.php';</script>";
?>