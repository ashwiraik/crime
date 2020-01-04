<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gp Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
  </head>
  <body class="homepage">   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Crime Management</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="crregistration.php">Registration</a></li>
                        <li><a href="Contact"</a></li>  <?php 
                            if(isset($_SESSION["id"])){
                                echo '
                                <li><a href="report.php">Report</a></li>
                                <li><a href="crlogout.php">Logout</a></li>';
                            }else{
                                echo '<li><a href="crlogin.php">Login</a></li>';
                            }
                        ?>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
	
	<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>User home</h2>
                <p class="lead">Welcome to User home where you register complaints about the crime occurred without hesitation <br> Here users can report crime any time 24*7</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Complaint registration</h3>
                            <p>One can report complaint freely without fear of the any criminal threats</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/service/client2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">User Profile</h3>
                            <p>All the users who are registered can view their profile</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                
		</div><!--/.container-->
	</section><!--/#feature-->