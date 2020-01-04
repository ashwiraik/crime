<?php
include "crdb.php";
$id=$_GET["id"];
 $query="Delete from complaint_registration where Complaint_id=$id";
$result=$link->query($query);
header("location:complaintlist.php");
?>