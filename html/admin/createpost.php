<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		require_once('dbconnect.php');
		$title = $_REQUEST["title"];
		$post = $_POST["post"];
		$category = $_POST["category"];

		// echo  $title ;

		$sql = "INSERT INTO posts ( title, post, category, author, views) "
				."VALUES ( '"
				 .$title. "','" . $post. "','"  . $category. "', '1', '0');"  ;

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

	<?php 
		require('topnav.php');
	 ?>

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