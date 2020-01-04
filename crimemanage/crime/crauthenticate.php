<?php include "css/top.php" ?>    
  <section id="about-us">
        <div class="container">     
      <div class="jumbotron" style="background: white;">
          <h1 class="display-3 text-center">Authentication</h1>
        </div>
<?php
include 'crdb.php';

if (isset($_POST['submit'])) {
$Email_id = $_POST['Email_id'];
$alert = "";
$_SESSION["Email_id"] = "$Email_id";
$sql = "SELECT Email_id FROM user WHERE Email_id='$Email_id'";
$result = $link->query($sql);
$count = $result->num_rows;
if (!$count == 0) {  //if the counts is not zero the Email exists
// echo "Email already exists";
header('Location:crforgot.php');
} else {
echo "<div class='alert alert-danger' role='alert'>
  Incorrect Email id!
</div>";
}
}
?>
 <div class="container">
      <div class="card">
        <div class="card-body">

  <form class="form-control" method="post">
              <label for="Email_id">Email_id:</label>
              <input type="Email_id" name="Email_id" class="form-control">
              <hr>
              <input type="submit" class="btn btn-primary" name="submit" value="Confirm">
          </form>
       </div>
       </div>
       </div>
<br><br><br><br><br><br><br><br><br><br><br>
  </div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php" ?>

