<?php
include 'crdb.php';
session_start();
$Email = $_SESSION["Email"];
$alert = "";
 if (isset($_POST['submit'])) {
  $newp = $_POST['newp'];
  $conp = $_POST['conp'];

    if ($newp==$conp) {
      $sql = "UPDATE user SET password='$newp' WHERE email='$email'";
      $result = $link->query($sql);
      header('Location:crlogin.php');
    } else {
      echo "<div class='alert alert-danger' role='alert'>
        Passwords don't match!
      </div>";
}}
 ?>