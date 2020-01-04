<?php include "css/topforpolice.php" ?>		
        
<?php
if( !isset($_SESSION['username']))
{
    header('location:crlogin.php');
} ?>


<section id="portfolio" style="background-image:url(images/aa.jpg);">
          <div class="container-fluid"> 
           <div class="center">          
                <h2>Police Home</h2>
               <p class="lead" class="display-3 text-center" ><b>Welcome to Police home
                <br> You are logged in</b></p>
            </div>
        


                  
                

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="userprofile.php">View Profile</a></h3>
                                    <p> Here one can view police profile who have been registered under crime management</p>
                                   
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                       <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="criminallist.php">Criminal list</a></h3>
                                    <p> Here police can view criminal list under crime management</p>
                                   
                                </div> 
                            </div>
                        </div>        
                    </div>
                    
                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="FIR.php">Register FIR</a></h3>
                                    <p>First time report where can register fir aganist criminals.</p>
                                   
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->

                  <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="postmoterm.php">Postmoterm details</a></h3>
                                    <p>Here one can view the postmoterm details under crime management.</p>
                                   
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->

                      <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="prisonerregistration.php">Prisoner Registration</a></h3>
                                    <p>First time report where can register fir aganist criminals.</p>
                                   
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
                    </div>
          </div><!--/.container-->
    </section><!--/portfolio-->
    
    
<?php include "css/footer.php" ?>


           

             