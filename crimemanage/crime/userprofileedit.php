<?php include "css/topforadmin.php";
session_start();
$id = $_SESSION['id'];
?>
<section id="about-us" style="background-image:url(images/imone.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron" style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Registration</h1>
        </div>
       <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<?php
include "crdb.php";
//$id=$_GET["id"];
 $query="select * from user where User_id=$id";
$result=$link->query($query);
while ($row=mysqli_fetch_row($result)){
?>

<form class="form-group"  id="form"
 action="userprofilemodify.php" method="post"  onsubmit="return validation();">
<table width="container" style="border-width: 0;">
  <tr>
  <td>
    First name
  </td>
  <td>
   <input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[1]; ?>" required="" name="First_name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
   
  </td>
</tr>
<tr>
  <td>
    Last name
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[2]; ?>" required="" name="Last_name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
    User name
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[3]; ?>" required="" name="User_name"  data-validation="custom"  data-validation-regexp="^([a-zA-Z0-9]+)$"/>
  </td>
</tr>
<tr>
  <td>
    Password
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[4]; ?>" required id="" name="Password " data-validation="length" data-validation-length="min4"/>
  </td>
</tr>
<tr>
  <td>
<tr>
  <td>  Gender:</td>
  <td>
    <select class="form-control"  style="margin-bottom: 10px;" name="Gender">
      <?php
      echo $row[5];
      if ($row[5]=="Male")
      {
         ?>
         <option selected>Male</option>
         <option>Female</option>
         <?php
      }
      else
      {
        ?>
         <option >Male</option>
          <option selected>Female</option>
         <?php
      }
      ?>
      
      
    </select>
   
  </td>
</tr>
  <td>
    Date of birth
  </td>
  <td>
    <input type="Date" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[6]; ?>"  required="" name="Date_of_birth"/>
  </td>
</tr>
  <td>
    Secret question
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"  class="form-control"  value="<?php echo $row[7]; ?>" required="" name="Secret_question" data-validation="custom" />
  </td>
</tr>
  <td>
    Secret answer
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[8]; ?>" required="" name="Secret_answer" data-validation="custom" />
  </td>
</tr>
<tr>
  <td>Address <br><span id="maxlength">250</span> characters left</td>
  <td><textarea cols="25" rows="5" style="margin-bottom: 10px;" id="area"  class="form-control"  name="Address" 
  data-validation="alphanumeric" data-validation-allowing=" " value= ><?php echo $row[9]; ?></textarea></td>
</tr>
  <td>
    Pincode
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[10]; ?>"  name="Pincode"  data-validation="number" maxlength="6" pattern=".{6,6}" name="Pincode"/>
  </td>
</tr>
<tr>
  <td>Phone Number:</td>
  <td><input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[11]; ?>" required="" name="Phone_no" data-validation="number"  name="Phone_no" maxlength="10" pattern=".{10,10}"/></td>
</tr>
<tr>
  <td>Email Id:</td>
  <td><input type="email" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[12]; ?>"  name="Email_id"/></td>
</tr>
<tr>
  <td>Village:</td>
  <td><input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[13]; ?>"  name="Village"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td>Taluk:</td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[14]; ?>"   value="aaaaa"  name="Taluk"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td>District:</td>
  <td><input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[15]; ?>" name="District"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td>State:</td>
  <td><input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[16]; ?>"  name="State"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<td><input type="hidden" value="<?php echo $row[0]; ?>"  name="id"/></td>
<tr>
<tr>
 <td colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Submit"/></td>
</tr>
</table>
</form>

<?php 

?>

<?php }
?>
  </div>
    </div>
<!-- Required for Validation -->
        <script src="./js/jquery.js"></script>
        <script src="./js/jquery.form-validator.min.js"></script>
        <script type="text/javascript">
            $.validate({
        form : '#form'
        });
         $('#area').restrictLength($('#maxlength'));
        </script>
    <!--   -->
  
    </div>
    </section>
    <?php include "css/footer.php" ?>

