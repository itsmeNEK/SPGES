<?php
	require("conn.php");
$studID = $_POST['studNo'];

if(!empty($_FILES['image'])){

  $image_name = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];
  $image_size = $_FILES['image']['size'];

  $exp = explode(".", $image_name);
  $ext = end($exp);
  $allowed_ext = array('jpg', 'jpeg', 'png');

  if(in_array($ext, $allowed_ext)){
    $image = $studID .'.'.$ext;
    $location = 'idpic/'.$image;
    if($image_size < 5242880){
      move_uploaded_file($image_temp, $location);
      $up = mysqli_query($conn, "UPDATE tbl_stdprofile SET `piclink` = '$image' WHERE `studID` = '$studID'");

      if($up == TRUE){
        echo $studID;
      }else{
        echo 0;
      }
    }else{
      echo 3;
    }
  }else{
    echo 2;
  }
}else{
  echo 1;
}


?>
