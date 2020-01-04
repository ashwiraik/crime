<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/mot.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"  style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Postmoterm Report</h1>
        </div>
 <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<form class="form-group" id="form" action="postmotermprs.php" method="post" onsubmit="return validation();">
<table width="container" >
<tr>
  <td>
   <b> Result</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Result" data-validation="custom" />
  </td>
</tr> 
<tr>
  <td>
   <b> Person name</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Person name"
    data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
<tr>
  <td> <b> Gender</b></td>
  <td>
    <input type="radio" value="Male" name="Gender" required="Please select gender"/>Male
    <input type="radio" value="Female" name="Gender"/>Female
  </td>
</tr>
  <td>
  <b>  Death date</b>
  </td>
  <td>
    <input type="Date" style="margin-bottom: 10px;" class="form-control"  required="" name="Death_date"/>
  </td>
</tr>
  <td>
   <b> Death time</b>
  </td>
  <td>
    <input type="Time" style="margin-bottom: 10px;" class="form-control" required="" name="Death_time"/>
  </td>
</tr>
  <td>
  <b>  Death place</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Death_place" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$""/>
  </td>
</tr>
<tr>
  <td>
  <b>  Death type</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Death_type"
     data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td><b>Case description</b><br><span id="maxlength">250</span> characters left</td>
  <td><textarea cols="25" rows="5" style="margin-bottom: 10px;" class="form-control" data-validation="custom" required="" name="Case_Description" /></textarea></td>
</tr>
<tr>
  <td><b>Doctor name</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Doctor_name"
   data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
</tr>
<tr>
  <td><b>Police station</b></td>
  <td><input type="text" style="margin-bottom: 10px;" class="form-control" required=""  name="PoliceStation" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
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

