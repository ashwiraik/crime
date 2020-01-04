<?php include "css/top.php" ;

   $id = $_SESSION['id'];
?>  
  <section id="about-us" style="background-image:url(clogin.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron" style="background-color : transparent;color:white;">
          <h1 class="display-3 text-center">Forgot Password</h1>
        </div>
<?php
include 'crdb.php';

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

 <div class="container">
 <div class="well" style="padding-right: 20%; padding-left: 20% ;background-color : transparent; color:white;">
    
        <div class="form-group">
          <form  method="post">
            <p><b>Email id:</b> <?php echo $Email_id; ?></p>
            <label for="New_password"><b>New Password:</b>
            </label>
            <input type="password" style="width:50%;" name="newp" class="form-control">
            <label for="confirm_password"><b>Confirm Password:</b>
            </label>
            <input type="password" style="width:50%;" name="conp" class="form-control">
            <hr>
            <input type="submit" name="submit"  value="Save" class="btn btn-primary">
          </form>
  
      </div>
    
  </div>
  </div>
  


</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>
