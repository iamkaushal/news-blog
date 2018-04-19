<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		require_once('dbconnect.php');
		$username = htmlentities($_POST["username"], ENT_QUOTES);
		$email = htmlentities($_REQUEST["email"], ENT_QUOTES);
		$pwd = htmlentities($_POST["password"], ENT_QUOTES);

		// echo $username;
		// echo $email;
		// echo $pwd;



		$sql =  "INSERT INTO users ( email, hashed_psw, name) "
				."VALUES ( '"
				 .$email. "','" . $pwd. "','"  . $username. "');"  ;


		// echo $sql;

		$conn->query($sql);


		$expire = time() + 60*60*24*30;
		setcookie('useremail' , $email, $expire);
		setcookie('userpassword' , $pwd, $expire);
		header('Location:index.php?msg=1');

		$conn->close();

	}

 ?>



<?php 
	require_once('header.php');
 ?>

    <title>Admin Panel | Home</title>
	
<body>

	<?php 
		require('topnav.php');
	 ?>

	 <div class= "container" style="padding-bottom: 20%;">
	 	<h1>Sign up </h1>
	 	<br>
		 <form action="/usersignup.php" method="Post">
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
		  <a href="adminlogin.php">Login</a>
		</form> 
	 </div>

	 <?php 
	 	require('footer.php');
	  ?>


</body>
</html>