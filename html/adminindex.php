<?php 
	require_once('loggedfunction.php');
 ?>


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
						<li class="sports"><a href="deleteposts.php">Delete Posts</a></li>
						<!-- <li class="sports"><a href="deletepost.php">Delete post by title</a></li> -->
						<li class="sports"><a href="approveposts.php">Approve Posts</a></li>
						<!-- <li class="health"><a href="disapproveposts.php">Disapprove Post</a></li> -->
						<!-- <li class="sports"><a href="createpost.php">Create Post</a></li> -->
						<li class="sports"><a href="adminsignup.php">Create Admin</a></li>
						<li class="sports"><a href="createuser.php">Create User</a></li>
						<li class="sports"><a href="adminlogin.php?logout=2">Log Out</a></li>
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
<h1 class="entry-title" > Delete Posts </h1> 
<a href="deleteposts.php" style="float : left; display: inline-block; color: Blue;">Delete Posts </a></h2>
<br>
</div>


<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Delete Post with Title </h1> 
<a href="deletepost.php" style="float : left; display: inline-block; color: Blue;">Delete Post with Title </a></h2>
<br>
</div>

<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Approve Posts </h1> 
<a href="approveposts.php" style="float : left; display: inline-block; color: Blue;">Approve Drafts </a></h2>
<br>
</div>

<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Disapprove Posts</h1> 
<a href="disapproveposts.php" style="float : left; display: inline-block; color: Blue;">Disapprove Posts </a></h2>
<br>
</div>
<!-- 
<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Create New Post</h1> 
<a href="createpost.php" style="float : left; display: inline-block; color: Blue;">Create New Post </a></h2>
<br>
</div>
 -->

<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Create Reporter</h1> 
<a href="createuser.php" style="float : left; display: inline-block; color: Blue;">Create New Reporter </a></h2>
<br>
</div>

<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 1%; float : left;">								
																	
<h2 class="entry-title" style="display: inline-block ;float : left;"> 
<h1 class="entry-title" > Create Admin</h1> 
<a href="adminsignup.php" style="float : left; display: inline-block; color: Blue;">Create New Admin </a></h2>
<br>
</div>
				


<?php

require('maincontentafterpost.php');
 require('footer.php'); ?>
		 
</body>
</html>

