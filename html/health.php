<?php 
	require_once('userloggedfunction.php');
 ?>

<?php 
	require_once('header.php');
	 ?>

    <title>News Press | Home</title>
	
<body>
	
		 	<?php
		 		require('topnav.php');
				

		 		require('dbconnect.php');

				$sql = "SELECT * FROM posts WHERE category = 'health'";
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
						<a href="index.php" style="color: Blue;" >Read More...</a></div>
						';

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

