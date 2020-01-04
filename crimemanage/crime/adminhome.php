
<?php include "css/topforadmin.php" ?>  
		
	<section id="portfolio" style="background-image:url(images/aa.jpg);">
        <div class="container">
            <div class="center">
               <h2>Admin home</h2>
               <p class="lead"><b>You have logged in
                <br>Welcome to the admin home</b</p>
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
                                    <h3><a href="userlist.php">Userlist</a></h3>
                                    <p>Here you can view the list of  all different users who have been registered under Crime Management System .</p>
                                  
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="policeview.php">Police list</a></h3>
                                    <p>Here you can view the list of police officers who have been registered as police under Crime Management System .</p>
                                   
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="Complaintlist.php">Complaintlist</a></h3>
                                    <p>Here you can view the list of different users who have been registered complaints under Crime Management System </p>
                                   
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="firlist.php">FIR list</a></h3>
                                    <p>Here you can view the List of FIR agnaist criminals
                                    who have been registered under Crime Management System .</p>
                                   
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          </div><!--/.container-->
    </section><!--/portfolio-->
    
    

<?php include "css/footer.php" ?>