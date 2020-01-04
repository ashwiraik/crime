<?php include "css/top.php" ?>
  <section id="about-us" style="background-image:url(images/imone.jpg);">
        <div class="container-fluid">
      <div class="jumbotron" style="background-color : transparent;color:white;" >
          <h1 class="display-3 text-center">Registration</h1>  </div>

<!-- <script>

function validation(){
var vil=document.getElementById('vl').value;
if(!isNaN(document.getElementById('fn').value)){

    alert("No numbers please!");
    document.getElementById('fn').focus();
    return false;

  }
  if(!isNaN(document.getElementById('ln').value)){

    alert("No numbers please!");
    document.getElementById('ln').focus();
    return false;

  }
   if(!isNaN(document.getElementById('un').value)){

    alert("No numbers please!");
    document.getElementById('un').focus();
    return false;

  }

 if(document.getElementById('pn').value.length<6){

    alert("Pincode cannot be less than 6");
    document.getElementById('pn').focus();

    return false;

  }
   if(document.getElementById('ph').value.length<10){

    alert("Phone No cannot be less than 10");
    document.getElementById('ph').focus();

    return false;

  }
   if(!isNaN(document.getElementById('vl').value)){

    alert("No numbers please!");
    document.getElementById('vl').focus();
    return false;
  }


  if (!parseInt(vil)) {
    alert("No numbers please in Village!");
    document.getElementById('vl').focus();
    return false;
  }

  if(!isNaN(document.getElementById('tl').value)){

    alert("No numbers please!");
    document.getElementById('tl').focus();
    return false;

  }
   if(!isNaN(document.getElementById('dt').value)){

    alert("No numbers please!");
    document.getElementById('dt').focus();
    return false;

  }
  if(!isNaN(document.getElementById('st').value)){

    alert("No numbers please!");
    document.getElementById('st').focus();
    return false;

  }
    return true;

}
</script> -->
    <div class="container">

 <div class="well" style="padding-right: 20% ; padding-left: 20% ; background-color : transparent; color:white;">
        <form class="form-group" id="form" action="crregistrationprs.php" method="post" onsubmit="return validation();">

<center>
        <table width="container" cellspacing="2" cellpadding="2">

      <tr>
          <td>
           <b> First name</b>
          </td>
          <td>
            <input type="text" style="margin-bottom: 10px;" class="form-control"  required id="fn" name="First_name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>

            </td>
        </tr>
        <tr>
          <td>
            <b>Last name</b>
          </td>
          <td>
            <input type="text" style="margin-bottom: 10px;" class="form-control"  required  id="ln" name="Last_name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/>
          </td>
        </tr>
        <tr>
          <td>
           <b> User name</b>
          </td>
          <td>
            <input type="text" style="margin-bottom: 10px;"  class="form-control"  required id="un" name="User_name" data-validation="custom"  data-validation-regexp="^([a-zA-Z0-9]+)$"/>
          </td>
        </tr>
        <tr>
          <td>
            <b>Password</b>
          </td>
          <td>
            <input type="password" style="margin-bottom: 10px;" class="form-control" data-validation="length" data-validation-length="min4" required id="" name="Password"/>
          </td>
        </tr>
        <tr>
          <td>
        <tr>
          <td><b>  Gender </b></td>
          <td>
            <input type="radio" value="Male" name="Gender" required="Please select gender"/><b>Male</b>
            <input type="radio" value="Female" name="Gender"/><b>Female</b>
          </td>
        </tr>
          <td>
          <b>  Date of birth </b>
          </td>
          <td>
            <input type="Date" style="margin-bottom: 10px;" data-validation="date"  class="form-control" value="2000-1-1"  required="" name="Date_of_birth"/>
          </td>
        </tr>
          <td>
           <b> Secret question </b>
          </td>
          <td>
            <input type="text" style="margin-bottom: 10px;"  class="form-control" required id="" name="Secret_question" data-validation="custom"/>
          </td>
        </tr>
          <td>
           <b> Secret answer</b>
          </td>
          <td>
            <input type="text" style="margin-bottom: 10px;" class="form-control" required id="" name="Secret_answer" data-validation="custom"/>
          </td>
        </tr>
        <tr>
          <td><b>Address</b><br><span id="maxlength">250</span> characters left</td>
          <td><textarea cols="25" rows="5" style="margin-bottom: 10px;" id="area" class="form-control"  name="Address" data-validation="alphanumeric" data-validation-allowing=" "></textarea></td>
        </tr>
          <td>
           <b> Pincode </b>
          </td>
          <td>
            <input type="text" style="margin-bottom: 10px;" class="form-control" required id="pn " data-validation="number" maxlength="6" pattern=".{6,6}" name="Pincode"/>

          </td>
        </tr>
        <tr>
          <td><b>Phone Number </b></td>
          <td><input type="text" style="margin-bottom: 10px;" class="form-control" required id="ph" data-validation="number"  name="Phone_no" maxlength="10" pattern=".{10,10}" /> </td>

        </tr>
        <tr>
          <td><b>Email Id </b></td>
          <td><input type="email" style="margin-bottom: 10px;" class="form-control" data-validation="email" required=""  name="Email_id"/></td>
        </tr>
        <tr>
          <td><b>Village</b></td>
          <td><input type="text" style="margin-bottom: 10px;" class="form-control"  required id="vl"   name="Village"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
        </tr>
        <tr>
          <td><b>Taluk</b></td>
          <td><input type="text" style="margin-bottom: 10px;" class="form-control" required id="tl"  name="Taluk"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
        </tr>
        <tr>
          <td><b>District</b></td>
          <td><input type="text" style="margin-bottom: 10px;" class="form-control" required id="dt" name="District"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
        </tr>
        <tr>
          <td><b>State</b></td>
          <td><input type="text" style="margin-bottom: 10px;" class="form-control" required id="st" name="State"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"/></td>
        </tr>
        <?php

        if(isset($_SESSION['username']))
        {
          ?>
           <tr>
          <td><b>Role</b></td>
          <td>

          <select name="Role" style="color: black;">
            <option value="user">User</option>
            <option value="police">Police</option>
            <option value="admin">Admin</option>
          </select>
          </td>
        </tr>
        <?php
        }
        ?>
        <tr>
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
    <!--   -->

<?php include "css/footer.php" ?>





