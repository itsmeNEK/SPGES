<?php
	session_start();

	$username = $_REQUEST["uname"];
	$password = $_REQUEST["upass"];

	require("conn.php");
		$result = mysqli_query($conn,"SELECT * from tbl_user where userName='$username'");
			if (mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_array($result);
				$hash_pass = $row["passWord"];
				
				if(password_verify($password, $hash_pass)){
					$_SESSION["userID"]	 = $row["userID"];
					$_SESSION["fName"]   = $row["fname"] .' '. $row["lname"];
					$_SESSION["uName"]   = $row["userName"];
					$_SESSION["pWord"]   = $row["passWord"];
					echo 1;
				}else{
					echo 0;
				}
			}else{
				echo 0;
			}

?>
