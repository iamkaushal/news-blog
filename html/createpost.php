<?php 
	require_once('loggedfunctionreporter.php');
 ?>


<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		require('dbconnect.php');
		$title = $_REQUEST["title"];
		$post = $_POST["post"];
		$category = $_POST["category"];

		$reporterid = $_COOKIE['reporterid'];

		// echo  $reporterid ;

		$sql = "INSERT INTO posts ( title, post, category, author, views) "
				."VALUES ( '"
				 .$title. "', '" . $post. "', '"  . $category. "', '"  .$reporterid. "', '0');"  ;

		// echo $sql;

		$conn->query($sql);

		$conn->close();

	}

 ?>

<!-- // 		echo <<<END

// 		kausalsharkajsdkfjdas
// 		kasjfkadsflksjdf
// 		askfjasl;''
// 		flds

// END;
 -->

<?php 
	require_once('header.php');
 ?>

    <title>Admin Panel | Create Post</title>
	
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
						<li class="sports"><a href="reporterindex.php">Reporter Panel</a></li>
						<li class="sports"><a href="reporterposts.php">Posts by You</a></li>
						<!-- <li class="sports"><a href="approveposts.php">Approve Posts</a></li> -->
						<!-- <li class="health"><a href="disapproveposts.php">Disapprove Post</a></li> -->
						<li class="sports"><a href="createpost.php">Create Post</a></li>
						<!-- <li class="sports"><a href="adminsignup.php">Create User</a></li> -->
						<li class="sports"><a href="reporterlogin.php?logout=2">Log Out</a></li>
						</li>
					</ul> 					
				</nav>
				
			</div>
		</div>
</header><!--/#navigation--> 

	 <div class= "container" style="padding-bottom: 20%;">
	 	<h1>New Post</h1>
	 	<br>
		 <form action="createpost.php" method="post">
		  <div class="form-group">
		    <label for="title">Title:</label>
		    <input type="text" name= "title" class="form-control" id="title">
		  </div>

		  <div class="form-group">
		    <label for="post">post:</label>
		    <textarea rows="25" name="post" class="form-control" id="post"></textarea>
		  </div>
		  
		  <div class="form-group">
		    <label for="category">Category:</label>
		     <select class="form-control" name="category">
			  <option value="business">Business</option>
			  <option value="politics">Politics</option>
			  <option value="sport">Sport</option>
			  <option value="health">Health</option>
			  <option value="entertainment">Entertainment</option>
			</select> 
		    <!-- <input type="text" name="category" class="form-control" id="category"> -->
		  </div>
		  
		  <button type="submit" name="submit" >Submit</button>
		</form> 
	 </div>

	 <?php 
	 	require('footer.php');
	  ?>


</body>
</html>