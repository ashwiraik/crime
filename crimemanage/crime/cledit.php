<?php include "css/topforadmin.php" ?>     
  <section id="about-us" style="background-image:url(images/Complaint.jpg);">
        <div class="container-fluid">
      <div class="jumbotron" style="background-color : transparent;color:white;">
          <h1 class="display-3 text-center">Complaint Registration</h1>
        </div>
            <div class="container">
<div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">

<?php
include "crdb.php";
$id=$_GET["id"];
$query="select * from complaint_registration where Complaint_id='$id'";
$result=$link->query($query);
while ($row=mysqli_fetch_row($result)) {
?>

<form class="form-group" id="form" action="clmodify.php" method="post"  onsubmit="return validation();">
<table width="container" style="border-width: 0;">
<!-- <tr>
  <td>
    Complaint id
  </td>
  <td>
    <input type="text" placeholder="Enter complaint id" value="aaaaa" required="" name="Complaint_id"/>
  </td>
</tr> -->
<tr>
  <td>
    Complaint no
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[1]; ?>" required="" name="Complaint_no" data-validation="number" />
  </td>
</tr>
</tr>
<tr>
  <td>Suspect details:</td>
  <td>
      <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[3]; ?>" required="" name="Suspect_details" data-validation="custom"/>
  </td>
  </tr>
<tr>
  <td>Description: <br><span id="maxlength">250</span> characters left</td>
  <td>
    <textarea cols="25" rows="5" style="margin-bottom: 10px;" class="form-control"  required="" name="Description" data-validation="custom" ><?php echo $row[4]; ?></textarea>
  </td>
  </tr>
  <tr>
  <td>Date:</td>
  <td>
    <input type="Date" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[5]; ?>" required="" name="Date"/>
  </td>
  </tr>
  <tr>
  <td>
    Crime type
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[6]; ?>"  required="" name="Crime_type" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
  <td>
    Crime date
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[7]; ?>" required="" name="Crime_date"/>
  </td>
</tr>
  <td>
    Crime place
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[8]; ?>"  required="" name="Crime_place" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
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
