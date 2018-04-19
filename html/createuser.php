<?php 
	require('loggedfunction.php');
 ?>

<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		require('dbconnect.php');
		$username = htmlentities($_POST["username"], ENT_QUOTES);
		$email = htmlentities($_REQUEST["email"], ENT_QUOTES);
		$pwd = htmlentities($_POST["password"], ENT_QUOTES);

		// echo $username;
		// echo $email;
		// echo $password;



		$sql =  "INSERT INTO Reporters ( email, pwd, name) "
				."VALUES ( '"
				 .$email. "','" . $pwd. "','"  . $username. "');"  ;

		$conn->query($sql);
		echo $sql;


		$expire = time() + 60*60*24*30;
		setcookie('useremail' , $email, $expire);
		setcookie('userpassword' , $email, $expire);
		header('Location:reporterindex.php?msg=1');

		$conn->close();

	}

 ?>



<?php 
	require_once('header.php');
 ?>

    <title>Admin Panel | Home</title>
	
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
						<!-- <li class="sports"><a href="deletepostsreporter.php?id=<?php echo $logged; ?>">Delete Posts</a></li> -->
						<li class="sports"><a href="deletepost.php">Delete post by title</a></li>
						<li class="sports"><a href="approveposts.php">Approve Posts</a></li>
						<li class="health"><a href="disapproveposts.php">Disapprove Post</a></li>
						<!-- <li class="sports"><a href="createpost.php">Create Post</a></li> -->
						<li class="sports"><a href="adminsignup.php">Create User</a></li>
						<li class="sports"><a href="reporterlogin.php?logout=2">Log Out</a></li>
						</li>
					</ul> 					
				</nav>
				
			</div>
		</div>
</header><!--/#navigation--> 

	 <div class= "container" style="padding-bottom: 20%;">
	 	<h1>Sign up (REPORTER)</h1>
	 	<br>
		 <form action="/createuser.php" method="Post">
		  <div class="form-group">
		    <label for="username">Name:</label>
		    <input type="text" class="form-control" id="username" name="username">
		  </div>

		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>

		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name="password">
		  </div>
		  
		  <div class="form-group">
		    <label for="pwd2">Confirm Password:</label>
		    <input type="password" class="form-control" id="pwd2" name="password2">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Submit</button>
		  <a href="reporterlogin.php">Login</a>
		</form> 
	 </div>

	 <?php 
	 	require('footer.php');
	  ?>


</body>
</html>