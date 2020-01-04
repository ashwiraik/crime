<?php include "css/topforadmin.php" ?>  
		
	<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>User home</h2>
               <p class="lead">Welcome to admin's home where you can manage user lists,FIR lists,Police lists,Complaint lists
                <br> Does have permission to add,delete contents.</p>
            </div>
        <?php

if( !isset($_SESSION['username']))
{
    header('location:crlogin.php');
} ?>

           

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="complaintregisteruser.php">Complaint registration</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                  
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="userprofile.php">View profile</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                   
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                   

          </div><!--/.container-->
    </section><!--/portfolio-->
    
    
<?php include "css/footer.php" ?>

