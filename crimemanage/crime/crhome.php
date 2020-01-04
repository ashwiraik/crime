<?php include "css/topforuser.php" ?>    
  <section id="portfolio" style="background-image:url(images/aa.jpg>
        <div class="container">
            <div class="center">
               <h2>User home</h2>
               <p class="lead"><b>Welcome to users's home where you can register complaints
                <br> You can register complaints.</b></p>
            </div>

 <?php

if( !isset($_SESSION['username']))
{
    header('location:crlogin.php');
} ?>

           

            <div class="row">
                <div class="portfolio-items">
     
                    <div class="portfolio-item apps col-xs-12 col-sm-6 col-md-6">
                        <div class="recent-work-wrap">
                                     
                            <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="complaintregisteruser.php">Complaint registration</a></h3>
                                    <p>Users can register the
                                    complaints aganist the criminals<br> who have been comitted crime.</p>
                            
                                  </div>
                                </div> 
                            </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-6 col-md-6">
                        <div class="recent-work-wrap">
                         <center>   <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="userprofile.php">View profile</a></h3>
                                    <p> All the users who have ben registered undre crime management<br> can view their profile
                                    </p>

                                    
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                   </div>

          </div><!--/.container-->
    </section><!--/portfolio-->
    
    
<?php include "css/footer.php" ?>

