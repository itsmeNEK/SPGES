<?php
	include_once 'conn.php';
		@session_start();

		if(!isset($_SESSION['studNo']))
		{
			header("Location: index.php");
		}else{
		$studNo 	= $_SESSION["studNo"];
		$fName 		= $_SESSION["fName"];
		$uName 		= $_SESSION["uName"];
		$pWord 		= $_SESSION["pWord"];

		}
?>
