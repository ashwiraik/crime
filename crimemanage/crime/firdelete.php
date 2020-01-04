<?php
include "crdb.php";
$id=$_GET["id"];
 $query="Delete from fir where Fir_id=$id";
$result=$link->query($query);
header("location:firlist.php");
?>