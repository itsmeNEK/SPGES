<?php

 require("conn.php");

  if(isset($_POST["stud_name"])){
    $subj       = $_POST['subj'];
    $spl        = explode("-", $subj);
    $subj_code  = $spl[0];
    $subj_desc  = $spl[1];
    $subj_unit  = $spl[2];
    $sem        = $_POST["sem"];
    $sy         = $_POST["sy"];
    $stud_no    = $_POST["stud_no"];
    $stud_name  = $_POST["stud_name"];
    $stud_grade = $_POST["stud_grade"];


    for($count = 0; $count < count($stud_name); $count++)
    {
      $query = mysqli_query($conn,"INSERT INTO `tbl_egrade`(`schoolYear`, `semester`, `studNo`, `studentName`, `subjCode`, `subjDesc`, `subjUnits`, `gradeCQ`)
                                          VALUES
                                          ('$sy','$sem','$stud_no[$count]','$stud_name[$count]','$subj_code','$subj_desc','$subj_unit','$stud_grade[$count]')");
    }

  }

?>
