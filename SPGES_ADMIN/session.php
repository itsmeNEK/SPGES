<?php
	include_once 'conn.php';
		@session_start();

		if(!isset($_SESSION['userID']))
		{
			header("Location: index.php");
		}else{
		$userID 	= $_SESSION["userID"];
		$fName 		= $_SESSION["fName"];
		$uName 		= $_SESSION["uName"];
		$pWord 		= $_SESSION["pWord"];

		}
?>
