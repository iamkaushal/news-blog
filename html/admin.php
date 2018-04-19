<?php 
	require_once('header.php');
 ?>



<title>News Press | Admin</title>
	
<body>
	

<header style="max-width: 80%; padding-left: 15%;  align-content: center";>
		<div class="navbar sticky-nav navbar-inverse " role="banner" >				
			<div class="container-fluid">	
				<div class="navbar-header">
											
					<a class="navbar-brand" href="index.php">
						<img class="main-logo img-responsive " style="position: relative;
							width: 170px;left: 15px;max-height: 70px; " src="logo.jpg" alt="NewsPress">
					</a>
				</div> 
				<nav id="mainmenu" class="navbar-left collapse navbar-collapse"> 
					<ul class="nav navbar-nav">                       
						<!-- <li class="sports"><a href="deletepost.php">Delete post by title</a></li> -->
						<!-- <li class="sports"><a href="approveposts.php">Approve Posts</a></li> -->
						<!-- <li class="health"><a href="disapproveposts.php">Disapprove Post</a></li> -->
						<!-- <li class="sports"><a href="adminsignup.php">Create User</a></li> -->
						</li>
					</ul> 					
				</nav>
				
			</div>
		</div>
</header><!--/#navigation--> 


<?php 

require('maincontentbeforepost.php');

?>

<?php 

		if($_GET['msg']=='1')
		{
			echo "<h2 style='color: Blue;'>You have successfully registered</h2>";
		}
 ?>




<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Admin Login</h1> 
<a href="adminlogin.php" style="float : left; display: inline-block; color: Blue;">Admin Login </a></h2>
<br>
</div>

				
<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Reporter Login</h1> 
<a href="reporterlogin.php" style="float : left; display: inline-block; color: Blue;">Reporter Login </a></h2>
<br>
</div>

				


<?php

require('maincontentafterpost.php');
 require('footer.php'); ?>
		 
</body>
</html>

