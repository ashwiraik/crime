<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/hg.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"  style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Criminal Registration</h1>
        </div>
 <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
          <h1 class="display-3 text-center">Criminal details</h1>
        


<form class="form-group" id="form" action="crimelistprs.php" method="post" enctype="multipart/form-data" onsubmit="return validation();"">
<center>
<table width="container" >
<tr>
  <td>
   <b> Criminal name:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Criminal_name" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
   <td rowspan=11>
   <img src = "images/sample.jpg" width="200">
  </td>
  
</tr>
<tr>
  <td>
  <b>  Alias name:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Alias_name" 
    data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr> 

<tr>
  <td> <b> Gender:</b></td>
  <td>
    <input type="radio" value="Male" name="Gender" required="Please select gender"/>Male
    <input type="radio" value="Female" name="Gender"/>Female
  </td>
</tr>
  <td>
  <b>Age:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" Maximum="3" required="" name="Age" data-validation="number"/>
  </td>
</tr>
<tr>
    </tr>
  <td>
   <b> Occupation:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  required="" name="Occupation"
     data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" />
  </td>
</tr>
<tr>
  <td>
   <b> Crime type:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  required="" name="Crime_type"
    ata-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
 <td><b>Address</b><br><span id="maxlength">250</span> characters left</td>
          <td><textarea cols="25" rows="5" style="margin-bottom: 10px;" id="area" class="form-control"  name="Address" data-validation="custom"></textarea></td>
</tr>
<tr>
  <td><b>Created date:</b></td>
  <td><input type="date" style="margin-bottom: 10px;" class="form-control"   name="Created_date"/></td>
</tr>
<tr>
<td> <b>Select image to upload:</b></td>
    <td><input type="file" name="file" id="fileToUpload"></td>
    </tr>
<tr>
 <td colspan="2"><input type="submit" class="btn btn-primary"  name="submit" value="Submit"/></td>
</tr>
</table>
</form>
</div>s
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

