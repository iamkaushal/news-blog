<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		require_once('dbconnect.php');
		$title = $_REQUEST["title"];
		$post = $_POST["post"];
		$category = $_POST["category"];

		// echo  $title ;

		$sql = "DELETE FROM posts WHERE title ='".$title ."'" ;
		// echo $sql;

		$conn->query($sql);

		$conn->close();

	}

 ?>


<?php 
	require_once('header.php');
 ?>

    <title>Admin Panel | Create Post</title>
	
<body>

	<?php 
		require('topnav.php');
	 ?>

	 <div class= "container" style="padding-bottom: 20%;">
	 	<h1>Delete Post</h1>
	 	<br>
		 <form action="deletepost.php" method="post">
		  <div class="form-group">
		    <label for="title">Title:</label>
		    <input type="text" name= "title" class="form-control" id="title">
		  </div>

		  <input type="submit" name="submit" >Submit</input>
		</form> 
	 </div>

	 <?php 
	 	require('footer.php');
	  ?>


</body>
</html>