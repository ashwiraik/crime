<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/mot.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"  style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Postmoterm Reports</h1>s
        </div>
 <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<?php
include "crdb.php";
$id=$_GET["id"];
$query="select * from post_moterm where Postmoterm_No='$id'";
$result=$link->query($query);
while ($row=mysqli_fetch_row($result)) {
?>

<form class="form-group" id="form" action="postmotermmodify.php" method="post"  onsubmit="return validation();">

<table width="container" style="border-width: 0;">
  

<tr>
  <td>
    Result
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[2]; ?>"  required="" name="Result"
      data-validation="custom" />
  </td>
</tr> 
<tr>
  <td>
    Person name
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;"class="form-control" value="<?php echo $row[3]; ?>"  required="" name="Person name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
<tr>
  <td>  Gender:</td>
  <td>
    <input type="radio" value="Male"   name="Gender" required="Please select gender"/>Male
    <input type="radio" value="Female" name="Gender"/>Female
  </td>
</tr>
  <td>
    Death date
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[5]; ?>"   required="" name="Death_date"/>
  </td>
</tr>
  <td>
    Death time
  </td>
  <td>
    <input type="Time"  style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[6]; ?>"  required="" name="Death_time"/>
  </td>
</tr>
  <td>
    Death place
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[7]; ?>" required=""  name="Death_place" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
    Death type
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;"class="form-control" value="<?php echo $row[8]; ?>" required="" name="Death_type" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>Case description:<br><span id="maxlength">250</span> characters left</td>
  <td><textarea cols="25" rows="5" style="margin-bottom: 10px;" id="area" class="form-control" class="form-control"   required="" name="Case_Description"  data-validation="custom" value=><?php echo $row[9]; ?></textarea></td>
</tr>
<tr>
  <td>Doctor name:</td>
  <td><input type="text"  style="margin-bottom: 10px;"
  class="form-control" value="<?php echo $row[10]; ?>" required="" name="Doctor_name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td>Police station:</td>
  <td><input type="text"  style="margin-bottom: 10px;"
  class="form-control"  value="<?php echo $row[11]; ?>" required=""  name="PoliceStation" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<input type="hidden" name="id" value='<?php echo $id; ?>'>
<tr>
 <td colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Submit"/></td>
</tr>
</table>
<?php
}?>
</form> 
</div>
</div>
 </div><!--/.container-->
    </section><!--/about-us-->
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
<?php include "css/footer.php" ?>

<?php
?>

