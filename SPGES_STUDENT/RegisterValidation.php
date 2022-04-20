<?php

	require("caesarC.php");

	$uname = encipher($_REQUEST['uname'],13);
	$upass = password_hash($_REQUEST['upass'], PASSWORD_DEFAULT);
	$name  =  encipher($_REQUEST['name'],13);
	$stud  =  encipher($_REQUEST['stud'],13);


	require("conn.php");
		$result = mysqli_query($conn,"SELECT * FROM tbl_student WHERE studIDNo = '$stud' OR userName = '$uname'");
			if(mysqli_num_rows($result)>0){
				echo 0;
			}else{
				$sql = mysqli_query($conn,"INSERT INTO tbl_student (studIDNo,fullName,userName,passWord) VALUE('$stud','$name','$uname','$upass')");
				echo 1;
			}
?>
