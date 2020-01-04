<?php
include "crdb.php";
$crimeid=$_REQUEST['id'];
$compid=$_REQUEST['cid'];

 $query="INSERT INTO `criminal_complaint`( `criminal_id`, `complaint_id`) VALUES ($crimeid,$compid)"; 
$result=$link->query($query);
echo "<script>alert('record inserted');window.location='criminalcomplaintlist.php?id=$crimeid'</script>";

?>
