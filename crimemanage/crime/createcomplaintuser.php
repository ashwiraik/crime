<?php include "css/topforuser.php" ?>
  <section id="about-us" style="background-image:url(images/complaint.jpg);">
        <div class="container-fluid">
      <div class="jumbotron" style="background-color : transparent;color:white;">
          <h1 class="display-3 text-center">Complaint registration</h1>
        </div>
         <div class="container">
<div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<script>

function validation(){
var vil=document.getElementById('vl').value;
if(!isNaN(document.getElementById('ct').value)){

    alert("No numbers please!");
    document.getElementById('ct').focus();
    return false;

  }
  if(!isNaN(document.getElementById('cp').value)){

    alert("No numbers please!");
    document.getElementById('cp').focus();
    return false;

  }

    return true;

}
</script>
<?php
$cno="";
include "crdb.php";
$query="Select max(Complaint_no) from complaint_registration";
$result=$link->query($query);
while ($row=mysqli_fetch_row($result)) {
  $cno=$row['0'];
}
 ?>
<form class="form-group" id="form" action="complaintregisterprsuser.php" method="post" onsubmit="return validation();">

<table width="container" >

<tr>
  <td>
  <b>  Complaint no:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Complaint_no" 
    value="<?php echo $cno;?>" readonly/>
  </td>
</tr>
</tr>
<tr>
  <td><b>Suspect details:</b></td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" data-validation="custom"  required="" name="Suspect_details"/>
  </td>
  </tr>
<tr>
  <td><b>Description:  <br><span id="maxlength">250</span> characters left</b></td>
  <td>
    <textarea cols="25" rows="5" style="margin-bottom: 10px;"  id="area" class="form-control" required="" name="Description"   data-validation="alphanumeric" data-validation-allowing=" " ></textarea>
  </td>
  </tr>
  <tr>
  <td><b>Date:</b></td>
  <td>
    <input type="date" style="margin-bottom: 10px;"  class="form-control" value="<?php echo date('d-m-Y')?>" required="" name="Date"/>
  </td>
  </tr>
  <tr>
  <td>
   <b> Crime type:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  required id="ct" name="Crime_type" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
  <td>
  <b>  Crime date:</b>
  </td>
  <td>
    <input type="date"  style="margin-bottom: 10px;" class="form-control" required id="" name="Crime_date"/>
  </td>
</tr>
  <td>
   <b> Crime place:</b>
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;" class="form-control" required id="cp" name="Crime_place" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>

 <td colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Submit"/></td>
</tr>
</table>
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



<?php include "css/footer.php" ?>

