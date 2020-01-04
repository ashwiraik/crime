<?php
include 'crdb.php';
session_start();
$Email_id = $_SESSION["Email_id"];
$alert = "";
 if (isset($_POST['submit'])) {
  $newp = $_POST['newp'];
  $conp = $_POST['conp'];

    if ($newp==$conp) {
      $sql = "UPDATE user SET Password='$newp' WHERE Email_id='$Email_id'";
      $result = $link->query($sql);
      header('Location:crlogin.php');
    } else {
      echo "<div class='alert alert-danger' role='alert'>
        Passwords don't match!
      </div>";
}}
 ?>