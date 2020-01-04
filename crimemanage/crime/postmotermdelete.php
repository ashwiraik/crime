<?php
include "crdb.php";
$id=$_GET["id"];
 $query="Delete from post_moterm where Postmoterm_No=$id";
$result=$link->query($query);
header("location:postmotermlist.php");
?>