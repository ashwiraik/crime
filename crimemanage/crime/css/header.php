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
                    <a class="navbar-brand" href="crhome.html">Crime Management</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="crhome.php">Home</a></li>
                        <li><a href="crregistration.php">Registration</a></li>
                        <?php 
                            if(isset($_SESSION["id"])){
                                echo '<li><a href="crlogout.php">Logout</a></li>';
                            }else{
                                echo '<li><a href="crlogin.php">Login</a></li>';
                            }
                        ?>
                       
                                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->