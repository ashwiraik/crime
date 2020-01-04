<?php
include "crdb.php";
$id=$_GET["id"];
 $query="Delete from user where User_id=$id";
$result=$link->query($query);
echo "<script>alert('record deleted sucessfully'); window.location = 'policeview.php';</script>";
?>s