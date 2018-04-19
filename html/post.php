<?php 
	require('userloggedfunction.php');
 ?>

<?php 
	
	$id = $_GET['id'];

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$comment = htmlentities($_REQUEST["comment"], ENT_QUOTES);
		$name = htmlentities($_REQUEST["name"], ENT_QUOTES);
		// echo  $comment ;

		// $sql = "INSERT INTO `comment`(`postid`, `authorid`, `comment`,`name`) VALUES ('{$id}','{$logged}','{$comment}', '{$name}')";
		$sql = "INSERT INTO `comment`(`postid`, `authorid`, `comment`,`name`) VALUES ('{$id}','{$logged}','{$comment}', '{$_COOKIE['username']}')";

		// echo $sql;
		require('dbconnect.php');
		$conn->query($sql);
		

		$conn->close();
	}

 ?>

<?php 
	require('header.php');
 ?>

    <title>News Press | Home</title>
	
<body>

	<?php 

// 		echo <<<END

// 		kausalsharkajsdkfjdas
// 		kasjfkadsflksjdf
// 		askfjasl;''
// 		flds

// END;

		require('topnav.php');

		echo "<div class='container'>";
 		
 	
 		require('dbconnect.php');

				$sql = "SELECT * FROM posts WHERE id=".$id  ;
				
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    
				    while($row = $result->fetch_assoc()) {

				        echo "<h1>" ,$row["title"] , "</h1>","<br>", "<article style='font-size: 110%; font-family:Helvetica'>" , nl2br($row["post"] ), "</article>" ;
				    }

				    $sql = "SELECT * FROM comment WHERE postid=".$id  ;
				
					$result = $conn->query($sql);

					echo "<br><h2>Comments</h2>";
					 while($row = $result->fetch_assoc()) {

				     echo "<div style='font-size: 110%; font-family:Helvetica;'><span style='font-size: 110%; color: Blue;' >" , nl2br($row["name"]), " :   </span><span style='font-size: 90%;'>" , nl2br($row["comment"]), "</span></div>" ;
				    }
				} 

				else {
				    echo "0 results";
				}

				$conn->close();

				
echo <<<END

 <div  style="padding-bottom: 20%;" >
	 	<br>
		 <form action="/post.php?id=<?php echo $id; ?>" method="Post">
		  <div class="form-group">
		    <!-- <label for="comment">Comment</label> -->
		    <!-- <input type="text" style='width:40%;' class="form-control" id="name" placeholder="Username" name="name"> -->
		    <input type="text" style='width:40%;' class="form-control" id="comment" placeholder="Write Your Comment" name="comment">
		  </div>

		  <button type="submit" class="btn btn-default">Comment</button>
		</form> 
	 </div>
END;

		echo "</div>";


 	 ?>

 	
 	
 <?php
  require('footer.php');
 ?>

</body>
</html>