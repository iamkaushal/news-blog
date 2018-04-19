<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		require('dbconnect.php');
		$id = $_REQUEST["id"];
		// echo $id;
		$sql = "DELETE FROM `posts` WHERE id = ".$id  ;
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
	
		 	<?php
		 		require('topnav.php'); 
				

		 		require('dbconnect.php');

				$sql = "SELECT * FROM posts WHERE approved = 1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row'


					require('maincontentbeforepost.php');

					echo "<h2>Delete Posts </h2>";

				    while($row = $result->fetch_assoc()) {
				        // echo $row["title"], " " , $row["post"], "<br>";


						echo '<div class="section post medium-post post-content col-sm-5"  style="display: inline-block; margin: 2% ;float : left;">								
																	
						<h2 class="entry-title" style="display: inline-block ;float : left;"> 
						<h1 class="entry-title" >' .$row['title'].'</h1>'
						.'<a href="post.php?id=' .$row['id'] .'" ' . 'style="float : left; display: inline-block;">' .substr( $row['post'],0, 150). ' </a></h2>
						<br>
						<a href="post.php?id=' .$row['id'] .'" style="color: Blue;" >Read More...</a>
						<br> 
						<form action="deleteposts.php" method="post">
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



		 	<?php 		
		 		// require('topnav.php');

		 		// require('maincontentbeforepost.php');

		 		for($i=0; $i<16; $i= $i+1)
		 		{
		 		// require('maincontent.php');
		 		}



		 		// require('maincontentafterpost.php');

		 		// require('footer.php');
		 	 ?>
 	
</body>
</html>

