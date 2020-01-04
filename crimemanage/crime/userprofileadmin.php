<?php include "css/topforadmin.php";
session_start();
$id = $_SESSION['id'];
?>
 <section id="about-us" style="background-image:url(images/profile.jpg);">
        <div class="container-fluid">
      <div class="jumbotron" style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">User Profile</h1>  </div>

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">  
<?php

include "crdb.php";
 $id=$_GET["id"];
 $query="select * from user  where User_id=$id" ;
$result=$link->query($query);
while ($row=mysqli_fetch_row($result)){
?>

<table width="35%" class="container">
  <tr>
  <td>
    First name
  </td>
  <td>
    <?php echo $row[1]; ?> 
  </td>
</tr>
<tr>
  <td>
    Last name
  </td>
  <td>
    <p><?php echo $row[2]; ?></p>
  </td>
</tr>
<tr>
  <td>
    User name
  </td>
  <td>
    <p><?php echo $row[3];?></p>
  </td>
</tr>
<tr>
  <td>
    Password
  </td>
  <td>
    <p><?php echo $row[4]; ?></p>
  </td>
</tr>
<tr>
  <td>
<tr>
  <td>  Gender:</td>
  <td>
    <p>
      <?php
      echo $row[5];
      
      ?>
      
      
    </p>
   
  </td>
</tr>
  <td>
    Date of birth
  </td>
  <td>
    <p><?php echo $row[6]; ?></p>
  </td>
</tr>
  <td>
    Secret question
  </td>
  <td>
    <p><?php echo $row[7]; ?></p>
  </td>
</tr>
  <td>
    Secret answer
  </td>
  <td>
  <p><?php echo $row[8]; ?></p>
  </td>
</tr>
<tr>
  <td>Address:</td>
  <td><p><?php echo $row[9]; ?></p>  </td>
</tr>
  <td>
    Pincode
  </td>
  <td>
   <p><?php echo $row[10]; ?></p>  </td>
  </td>
</tr>
<tr>
  <td>Phone Number:</td>
  <td><p><?php echo $row[11]; ?></p>  </td>
</tr>
<tr>
  <td>Email Id:</td>
  <td><p><?php echo $row[12]; ?></p>  </td>
</tr>
<tr>
  <td>Village:</td>
 <td> <p><?php echo $row[13]; ?></p></td>
    </td>
</tr>
<tr>
  <td>Taluk:</td>
  <td><p><?php echo $row[14]; ?></p></td>
    
</tr>
<tr>
  <td>District:</td>
 <td> <p><?php echo $row[15]; ?></p>
    </td>
</tr>
<tr>
  <td>State:</td>
  <td><p><?php echo $row[16]; ?></p>
  </td>
</tr>
</table>
<hr>
<!--<div class="container">
  <a href="userprofileedit.php" class="btn btn-success">Edit</a>
  <a href="" class="btn btn-danger">Delete</a> -->-
</div>
    
</form>
 </div>
 </div>
<?php }
?>
</div>
</section>
 <?php 
include 'css\footer.php';
?>