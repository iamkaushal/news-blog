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
		echo $pwd;



		$sql =  "INSERT INTO admin ( email, pwd, name) "
				."VALUES ( '"
				 .$email. "','" . $pwd. "','"  . $username. "');"  ;

		echo $sql;
		$conn->query($sql);


		// $expire = time() + 60*60*24*30;
		// setcookie('useremail' , $email, $expire);
		// setcookie('userpassword' , $email, $expire);
		header('Location:adminindex.php');

		$conn->close();

	}

 ?>



<?php 
	require_once('header.php');
 ?>

    <title>Admin Panel | Home</title>
	
<body>

	<?php 
		require('topnavadmin.php');
	 ?>

	 <div class= "container" style="padding-bottom: 20%;">
	 	<h1>Sign up (For New Admin)</h1>
	 	<br>
		 <form action="/adminsignup.php" method="Post">
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