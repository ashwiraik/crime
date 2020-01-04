<?php
include "crdb.php";
$id=$_GET["id"];
 $query="Delete from prisoner_registration where Prisoner_No=$id";
$result=$link->query($query);
header("location:prisonerlist.php");
?>