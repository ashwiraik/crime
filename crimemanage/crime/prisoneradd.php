<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/cm.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron" style="background-color : transparent;color:white;">
          <h1 class="display-3 text-center">Prisoner details</h1>
        </div>
    <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
        
   

<form class="form-group" id="form" action="prisonerregistrationprs.php" method="post"  onsubmit="return validation();">
<table width="container" >

<tr>
  <td>
   <b> Chargesheet number</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Charge_sheetNo" data-validation="number"/>
  </td>
</tr>
<tr>
  <td>
   <b> Name</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
  <b>  Nick name</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Nickname" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td> <b> Crime type </b></td>
  <td>
  <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Crime_type" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
          
    </td>
</tr>
  <td>
  <b>  Civil </b>
  </td>
  <td>
    <input type="text"  style="margin-bottom: 10px;" class="form-control" required="" name="Civil"  data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/>
  </td>
</tr>
  <td>
  <b>  Family members</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Family_members" data-validation="custom" />
  </td>
</tr>
<tr>
  <td>
   <b> Identification marks</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required=""  name="Identification_marks"  data-validation="custom" />
  </td>
</tr>
<tr>
  <td><b>Height</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control"  required="" name="Height"  data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<tr>
  <td><b>Weight</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Weight"  data-validation="custom" data-validation-regexp="^([a-zA-Z0-9]+)$"/></td>
</tr>
<tr>
  <td><b>Colour</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required=""  name="Colour" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
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

