<?php
include "crdb.php";
$id=$_GET["id"];
 $query="Delete from criminal_list where Criminal_id=$id";
$result=$link->query($query);
header("location:criminallistview.php");
?>