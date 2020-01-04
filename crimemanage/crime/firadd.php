<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/scene.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"  style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">FIR Registration</h1>
        </div>
 <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
        <?php 
$id=$_REQUEST['id'];
        ?>

<form class="form-group" id="form" action="firprs.php" method="post" onsubmit="return validation();">
<center>
<table width="container">

<tr>
  <td>
  <b>  District</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required id="dt" 
    name="District"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
   <b> Date</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo date('Y-m-d')?>" required="" name="Date"/>
  </td>
</tr>
<tr>
  <td>
  <b>  Time</b>
  </td>
  <td>
    <input type="Time" style="margin-bottom: 10px;" class="form-control" required="" name="Time"/>
  </td>
</tr>
<tr>
  <td>
  <b>  Information type</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Information_type" " data-validation="custom" />
  </td>
  </tr>
</tr>
  <td>
<b>  Place of occurence</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Place_of_occurence" " data-validation="custom"/>
  </td>
</tr>
  <td>
   <b> Foreign/Local</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Foriegn_Local" " data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/>
  </td>
</tr>
<tr>
  <td>
   <b> Act</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required=""   name="Act" " data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/>
  </td>
</tr>
<tr>
  <td><b>FIR No</b></td>
  <td><input type="text"  style="margin-bottom: 10px;" class="form-control" required="" name="FIR_No"  data-validation="number"  /></td>
</tr>
<tr>
  <td><b>Section</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Section" " data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<tr>
  <td><b>Diary reference no</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Diary_refno"
  data-validation="number"/></td>
</tr> 
<tr>
  <td><b>Informant address</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Informant_add" data-validation="custom"/></td>
</tr>
<tr>
  <td><b>Passport No</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Passport_No"
  data-validation="number"/></td>
</tr>
<tr>
  <td><b>Complaint No</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" readonly value="<?php echo $id?>" name="Complaint_No" data-validation="number"/></td>
</tr>
<tr>
  <td><b>Police</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Police" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td><b>Received time</b></td>
  <td><input type="Time" style="margin-bottom: 10px;" class="form-control" required="" name="Received_time"/></td>
</tr>
<tr>
  <td><b>Information record</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  required="" name="Information_Rec" data-validation="custom" /></td>
</tr>
<tr>
  <td><b>Distance from policestation</b></td>
  <td><input type="text"  style="margin-bottom: 10px;" class="form-control" required id="dp" name="Distance_polst" data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<tr>
 <td colspan="2"><input type="submit"  class="btn btn-primary" name="submit" value="Submit"/></td>
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
    <!--   -->
  
<?php include "css/footer.php" ?>

