<?php include "css/top.php" ?>    
  <section id="about-us">
        <div class="container-fluid">     
      <div class="jumbotron" style="background: white;">
          <h1 class="display-3 text-center">Police details</h1>
        </div>


<form class="form-group" action="policeprs.php" method="post">

<table class="container" >
<tr>
  <td>
   <b> First name</b>
  </td>
  <td>
    <input type="text" class="form-control" required="" name="First_name"/><br>
  </td>
</tr>
<tr>
  <td>
 <b>   Last name</b>
  </td>
  <td>
    <input type="text" class="form-control" required="" name="Last_name"/><br>
  </td>
</tr> 
<tr>
  <td>  <b>Gender</b></td>
  <td>
    <input type="radio" value="Male" name="Gender" required="Please select gender"/>Male
    <input type="radio" value="Female" name="Gender"/>Female<br>
  </td>
</tr>
<tr>
  <td>
<b>  Contact no</b>
  </td>
  <td>
    <input type="Number" class="form-control" required="" name="Contact_no"/><br>
  </td>
</tr>
<tr>
  <td>
  <b>  Email id</b>
  </td>
  <td>
    <input type="Email" class="form-control" required="" name="Email_id"/><br>
  </td>
</tr>
<tr>
  <td>
  <b>  Jurisdiction </b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control"  required="" name="Jurisdiction"/>
  </td><br>
</tr>
<tr>
  <td>
   <b> Designation</b>
  </td>
  <td>
    <input type="text" style="margin-bottom: 10px;" class="form-control" name="Designation"/>
  </td><br>
</tr>
<tr></tr>
<tr>
  <td><b>Status</b></td>
  <td>
  <input type="text" style="margin-bottom: 10px;" class="form-control" required="" name="Status"/>
  </td><br>
</tr>
<tr>
 <td colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Submit"/></td>
</tr>
</table>
</form>
</body>
</div><!--/.container-->
    </section><!--/about-us-->
  
  
<?php include "css/footer.php"; ?>
</html>
