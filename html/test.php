<?php 
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$title = $_REQUEST["title"];
		$post = $_POST["post"];
		$category = $_POST["category"];

		echo  $title ;
		// $sql = "INSERT INTO posts (id, title, post, category, author, views) 
		// 		VALUES (NULL, " ."$title}," . "{$post}," . "{$category}," . "'1', '0');" 

		// $conn->query($sql);

		// $conn->close();

	}

 ?>
