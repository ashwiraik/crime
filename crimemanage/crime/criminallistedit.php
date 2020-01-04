<?php include "css/topforpolice.php" ?>    
  <section id="about-us" style="background-image:url(images/imone.jpg);">
        <div class="container-fluid">     
      <div class="jumbotron"  style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Criminal Registration</h1>
        </div>
        <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
<?php

include "crdb.php";
$id=$_GET["id"];
$query="select * from criminal_list where Criminal_id='$id'";
$result=$link->query($query);
while ($row=mysqli_fetch_row($result)) {
?>

<form class="form-group"  id="form"
 action="criminallistmodify.php?id=<?php echo $row[0]?>" method="post" enctype="multipart/form-data"  enctype="multipart/form-data" onsubmit="return validation();">
<center>
<table width="container" style="border-width: 0;">

<tr>
  <td>
   <b> Criminal name :</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[1]?>" required="" name="Criminal_name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
   <td rowspan=11>
   <img src = "img/<?php  echo $row[5]?>" width="200">
  </td>
</tr>
<tr>
  <td>
   <b> Alias name:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[2]?>" required="" name="Alias_name
    data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$""/>
  </td>
</tr> 
<tr>
  <td><b>  Gender:</b></td>
  <td>
     <select class="form-control"  style="margin-bottom: 10px;" name="Gender">
      <?php
     
      if ($row[3]=="Male")
      {
         ?>
         <option selected><b>Male</b></option>
         <option><b>Female</b></option>
         <?php
      }
      else
      {
        ?>
         <option ><b>Male</b></option>
          <option selected>Female</option>
         <?php
      }
      ?>
      
      
    </select>
   
  </td>
</tr>
  <td>
 <b> Age:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[4]?>" Maximum="3" required="" name="Age" data-validation="number"/>
  </td>
</tr>
<tr>
    </tr>
  <td>
   <b> Occupation:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[6]?>"  required="" name="Occupation" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td>
   <b> Crime type:</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" value="<?php echo $row[7]?>" required name="Crime_type" data-validation-regexp="^([a-zA-Z]+)$"/>
  </td>
</tr>
<tr>
  <td><b>Address:</b></td>
  <td><textarea cols="25" rows="5" style="margin-bottom: 10px;" class="form-control"   required="" name="Address"  data-validation="custom"  value=><?php echo $row[8]?></textarea></td>
  </tr>
<tr>
  <td><b>Created date:</b></td>
  <td><input type="date" style="margin-bottom: 10px;" class="form-control"  value="<?php echo $row[9]?>" name="Created_date"/></td>
</tr>
<tr>
<td><b> Select image to upload:</b></td>
    <td><input type="file" style="margin-bottom: 10px;" name="file" id="fileToUpload"></td>
    </tr>
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
  
<?php include "css/footer.php" ?>


<?php
?>