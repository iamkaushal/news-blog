<?php 
	require_once('userloggedfunction.php');
 ?>


 <?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		require('dbconnect.php');
		$id = $_REQUEST["id"];
		// echo $id;
		$reporterid = $_COOKIE['reporterid'];
		// $sql = "DELETE FROM `posts` WHERE id = ".$id  ;
		$sql = "DELETE FROM `posts` WHERE id = '{$id}' AND author = '{$reporterid}' ;" ;
		// echo $sql;
		$conn->query($sql);
		$conn->close();
	}
 ?>

<?php 
	require_once('header.php');
	 ?>

    <title>News Press | Home</title>
	
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


		 	<?php
		 		// require('topnav.php');
				

		 		require('dbconnect.php');
		 		$reporterid = $_COOKIE['reporterid'];

		 		$sql = "SELECT * FROM posts WHERE author='{$reporterid}'";

		 		// echo $sql;
				$result = $conn->query($sql);


				if ($result->num_rows > 0) {
				    // output data of each row'


					require('maincontentbeforepost.php');


				    while($row = $result->fetch_assoc()) {
				        // echo $row["title"], " " , $row["post"], "<br>";


						echo '<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 2% ;float : left;">								
																	
						<h2 class="entry-title" style="display: inline-block ;float : left;"> 
						<h1 class="entry-title" >' .$row['title'].'</h1>'
						.'<a href="post.php?id=' .$row['id'] .'" ' . 'style="float : left; display: inline-block;">' .substr( $row['post'],0, 150). ' </a></h2>
						<br>
						<a href="post.php?id=' .$row['id'] .'" style="color: Blue;" >Read More...</a>
						<br> 
						<form action="reporterposts.php" method="post">
						<input type="hidden" name="id" value="' .$row['id']. '" ></input>
						<button type="submit" class="btn btn-default">Delete</button>
						</form> 
						</div>
						';
						// <a href="approved.php?id=' .$row['id'] .'">
				    }
				} else {
				    echo "0 results";
				}


					require('maincontentafterpost.php');

					require('footer.php');


				$conn->close();
			?> 


</body>
</html>

