<?php 
	require('header.php');
 ?>
 <title>Admin Panel | Home</title>


	
<body>

<?php 
	require_once('topnav.php');	
 ?>




<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$email = htmlentities($_REQUEST["email"], ENT_QUOTES);
		$pwd = htmlentities($_POST["password"], ENT_QUOTES);

		
		// echo  $pwd ;

		$sql = "SELECT * FROM  users WHERE email = '{$email}' AND hashed_psw = '{$pwd}' ;" ;
		// echo $sql;
		require_once('dbconnect.php');
		$result = $conn->query($sql);
		
		$row = $result->fetch_assoc();
		$name = $row['name'];
		
		// echo $result->num_rows;

		// echo $pwd;

		if($result->num_rows == 1) 
		{
			$expire = time() + 60*60*24*30;
			setcookie('useremail' , $email, $expire);
			setcookie('userpassword' , $pwd, $expire);
			setcookie('username' , $name, $expire);
			
			// $_COOKIE['userpassword'] = $pwd;
			// echo $_COOKIE['useremail'];
			
			// echo $_COOKIE['userpassword'];
			header('Location:index.php');
		}

		else {
			
			echo "<div class='container' style='color:Red;'><h2>Incorrect Email Or Password</h2></div>";
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

	 <div class= "container" style="padding-bottom: 20%;" >
	 	<h1>Login</h1>
	 	<br>
		 <form action="/login.php" method="Post">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="password" name="password">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		  <a href="usersignup.php">Sign Up</a>
		</form> 
	 </div>

	 <?php 
	 	require('footer.php');
	  ?>


</body>
</html>