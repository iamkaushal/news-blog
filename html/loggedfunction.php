
<?php 

		function loggedin()
		{
			$usremail = $_COOKIE['useremail'];
			$usrpwd = $_COOKIE['userpassword'];

			$sql = "SELECT * FROM  admin WHERE email = '{$usremail}' AND pwd = '{$usrpwd}' ;" ;
			// $sql = "SELECT * FROM  Reporters WHERE email = '" .$usremail. "' AND pwd = '" .$usrpwd.  "' ;" ;

			// echo $sql;

			require_once('dbconnect.php');

			$result = $conn->query($sql);
		
			$conn->close();

			// echo $result->num_rows;

			if($result->num_rows==1)
			{
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

				global $logged;
				$logged = $row["id"];
				// echo $logged;

				return true;
			}


			else {return false;}

		}


 ?>

 <?php 

 	// loggedin()

 	if(!loggedin())
 	{
 		header('Location: adminlogin.php');
 		// echo " not logged in";
 	}

 ?>

