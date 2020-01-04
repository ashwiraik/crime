<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/cm.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron" style="background-color : transparent;color:white;">
          <h1 class="display-3 text-center">Prisoner details</h1>
        </div>
         <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<?php
include "crdb.php";
$id=$_GET["id"];
$query="select * from prisoner_registration where Prisoner_No='$id'";
$result=$link->query($query);
while ($row=mysqli_fetch_row($result)) {
  ?>

<form class="form-group" id="form" action="prisonermodify.php" method="post"  onsubmit="return validation();">

<table width="container" style="border-width: 0;">

<tr>
  <td>
    Chargesheet number
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"   class="form-control" value="<?php echo $row[1]; ?>" required="" name="Charge_sheetNo"  data-validation="number"/>
  </td>
</tr>
<tr>
  <td>
    Name
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"   class="form-control" value="<?php echo $row[2]; ?>" required="" name="Name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
    Nick name
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[3]; ?>" required="" name="Nickname"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$""/>
  </td>
</tr>
<tr>
  <td>  crime type:</td>
  <td>
    <input type="text" style="margin-bottom: 10px;"   class="form-control" value="<?php echo $row[4]; ?>" required="" name="Crime_type" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
  <td>
    Civil 
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[5]; ?>"  required="" name="Civil"
    data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/>
  </td>
</tr>
  <td>
    Family member
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"   class="form-control"  value="<?php echo $row[6]; ?>" required="" name="Family_members" data-validation="custom" />
  </td>
</tr>
<tr>
  <td>
    Identification marks
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;"   class="form-control" value="<?php echo $row[7]; ?>" required=""   name="Identification_marks"  data-validation="custom" />
  </td>
</tr>
<tr>
  <td>Height:</td>
  <td><input type="text" style="margin-bottom: 10px;"   class="form-control" value="<?php echo $row[8]; ?>"  required="" name="Height"  data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<tr>
  <td>Weight:</td>
  <td><input type="text" style="margin-bottom: 10px;"   class="form-control" value="<?php echo $row[9]; ?>" name="Weight"  data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<tr>
  <td>Colour:</td>
  <td><input type="text" style="margin-bottom: 10px;"  class="form-control" value="<?php echo $row[10]; ?>"  name="Colour" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
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
