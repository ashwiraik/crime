<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/scene.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"  style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">FIR details</h1>
        </div>
 <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<?php
include "crdb.php";
$id=$_GET["id"];
$query="select * from fir where Fir_id='$id'";

$result=$link->query($query);
while ($row=mysqli_fetch_row($result)) {
?>

<form class="form-group"  id="form" action="firmodify.php" method="post"  onsubmit="return validation();">

<table width="container" style="border-width: 0;">

<tr>
  <td>
   <b> District</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[1]?>" required="" name="District" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
   <b> Date</b>
  </td>
  <td>
    <input type="Date" style="margin-bottom: 10px;" class="form-control"  value="<?php echo date('Y-m-d')?>" required="" name="Date"/>
  </td>
</tr>
<tr>
  <td>
  <b>  Time</b>
  </td>
  <td>
    <input type="time" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[3]?>" required="" name="Time"/>
  </td>
</tr>
<tr>
  <td>
  <b>  Information type</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[4]?>"  required="" name="Information_type" data-validation="custom" />
  </td>
  </tr>
</tr>
  <td>
   <b> Place of occurence</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[5]?>" required="" name="Place_of_occurence" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
  <td>
  <b>  Foreign/Local</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[6]?>" required="" name="Foriegn_Local" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
  <b>  Act</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[7]?>" required name="Act"  data-validation="alphanumeric" data-validation-allowing=" " ><tr>
  <td>Address <br><span id="maxlength">250</span> characters left</td>
  <td><textarea cols="25" rows="5" style="margin-bottom: 10px;" id="area"  class="form-control"  name="Address" 
  data-validation="alphanumeric" data-validation-allowing=" " value= ><?php echo $row[9]; ?></textarea></td>
</tr>>
  </td>
</tr>
<tr>
  <td><b>FIR No</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[8]?>" required="" name="FIR_No" data-validation="number" /></td>
</tr>
<tr>
  <td><b>Section</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[9]?>"  name="Section" data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<tr>
  <td><b>Diary reference no</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[10]?>"  name="Diary_refno" data-validation="number"/></td>
</tr>
<tr>
  <td><b>Informant address</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[11]?>"  name="Informant_add" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td><b>Passport No</b></td>
  <td><input type="Number" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[12]?>" name="Passport_No" data-validation="number"/></td>
</tr>
<tr>
  <td><b>Complaint No</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[13]?>" readonly name="Complaint_No" data-validation="number"/></td>
</tr>
<tr>
  <td><b>Police</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[14]?>"  name="Police" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td><b>Received time</b></td>
  <td><input type="time" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[15]?>"  name="Received_time"/></td>
</tr>
<tr>
  <td><b>Information record</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[16]?>"  name="Information_Rec" data-validation="custom" /></td>
</tr>
<tr>
  <td><b>Distance from policestation</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[17]?>"  name="Distance_polst" data-validation="custom"  data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<input type="hidden" name="id" value='<?php echo $id; ?>'>
<tr>
 <td colspan="2"><input type="submit" class="btn btn-primary" name="submit" name="submit" value="Submit"/></td>
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
