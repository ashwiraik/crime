<?php include "css/top.php" ?>
  <section id="about-us" style="background-image:url(clogin.jpg);">
        <div class="container-fluid">
      <div class="jumbotron " style="background-color : transparent;color:white;">
          <h1 class="display-2 text-center">Login Form</h1>
        </div>
    <div class="container">

 <div class="well" style="padding-right: 20%; padding-left: 20% ;background-color : transparent; color:white;">
    <form class="form-group" id="loginform"  action="crloginprocess.php" method="post">
              <label for="Username"><b>Username:</b></label>
              <input type="text" style="width:50%;" name="username" class="form-control" data-validation-error-msg="Please enter a valid username." data-validation="custom" data-validation-regexp="^([a-z]+)$"> <br>
              <label for="Password"><b>Password:</b></label>
              <input type="password" style="width:50%;"  name="password" class="form-control" data-validation="length" data-validation-length="min3" data-validation-error-msg="Please enter a valid password."> <br>
               <img src = "images/login.jpg" width="50">
              <input type="submit" class="btn btn-primary" name="submit" value="Login">

              <hr>
              <a href="crregistration.php" class="btn btn-warning">Create account</a>
              <a href="auth.php" class="btn btn-info">Forgot Password</a>

          </form>
  </div>
    </div>

   </div><!--/.container-->
    </section><!--/about-us-->
    <!-- Required for Validation -->
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form-validator.min.js"></script>

    <!--   -->
    <script type="text/javascript">
        $.validate({
    form : '#loginform'
  });
    </script>
<?php include "css/footer.php" ?>

