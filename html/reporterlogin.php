<?php 
	require('header.php');
 ?>

<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$email = htmlentities($_REQUEST["email"], ENT_QUOTES);
		$pwd = htmlentities($_POST["password"], ENT_QUOTES);

		
		// echo  $pwd ;

		$sql = "SELECT * FROM  Reporters WHERE email = '{$email}' AND pwd = '{$pwd}' ;" ;
		// echo $sql;
		require_once('dbconnect.php');
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();
		$rid = $row['id'];
		
		// echo $result->num_rows;

		// echo $pwd;

		if($result->num_rows == 1) 
		{
			$expire = time() + 60*60*24*30;
			setcookie('useremail' , $email, $expire);
			setcookie('userpassword' , $pwd, $expire);
			setcookie('reporterid' , $rid, $expire);
			// $_COOKIE['userpassword'] = $pwd;
			// echo $_COOKIE['useremail'];
			
			// echo $_COOKIE['userpassword'];
			header('Location:reporterindex.php');
		}


		$conn->close();
	}

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		if($_GET['logout'])
		{
			$expire = time() + 60*60;
			setcookie('useremail' , '', $expire);
			setcookie('userpassword' , '', $expire);
		}
	}

 ?>

    <title>Reporter Panel | Home</title>
	
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
						<!-- <li class="sports"><a href="createpost.php">Create Post</a></li> -->
						<!-- <li class="sports"><a href="adminsignup.php">Create User</a></li> -->
						<!-- <li class="sports"><a href="reporterlogin.php?logout=2">Log Out</a></li> -->
						</li>
					</ul> 					
				</nav>
				
			</div>
		</div>
</header><!--/#navigation--> 


	 <div class= "container" style="padding-bottom: 20%;" >
	 	<h1>Reporter Login</h1>
	 	<br>
		 <form action="/reporterlogin.php" method="Post">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="password" name="password">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form> 
	 </div>

	 <?php 
	 	require('footer.php');
	  ?>


</body>
</html>