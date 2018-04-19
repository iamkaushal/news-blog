


<?php 
	require_once('header.php');
 ?>

    <title>Admin Panel | Home</title>
	
<body>

	<?php 
		require('topnav.php');
	 ?>

	 <div class= "container" style="padding-bottom: 20%;">
	 	<h1>Login</h1>
	 	<br>
		 <form action="/action_page.php">
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd">
		  </div>
		  
		  <div class="form-group">
		    <label for="pwd2">Confirm Password:</label>
		    <input type="password" class="form-control" id="pwd2">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Submit</button>
		  <a href="adminsignup.php">Sign Up</a>
		</form> 
	 </div>

	 <?php 
	 	require('footer.php');
	  ?>


</body>
</html>